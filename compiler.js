import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

// Configuration
const CONFIG = {
    viewsDir: path.join(__dirname, 'resources', 'views'),
    outDir: path.join(__dirname, 'public'),
    componentsDir: path.join(__dirname, 'resources', 'views', 'components'),
    layoutFile: path.join(__dirname, 'resources', 'views', 'layouts', 'app.blade.php')
};

// Ensure output directories exist
function ensureDir(dir) {
    if (!fs.existsSync(dir)) {
        fs.mkdirSync(dir, { recursive: true });
    }
}

// Simple Blade Parser
class BladeCompiler {
    constructor() {
        this.layout = fs.readFileSync(CONFIG.layoutFile, 'utf8');
        this.components = this.loadComponents();
        // Global Mock Data Context
        this.context = {}; 
    }

    loadComponents() {
        const components = {};
        if (fs.existsSync(CONFIG.componentsDir)) {
            const files = fs.readdirSync(CONFIG.componentsDir);
            files.forEach(file => {
                if (file.endsWith('.blade.php')) {
                    const name = 'x-' + file.replace('.blade.php', '');
                    components[name] = fs.readFileSync(path.join(CONFIG.componentsDir, file), 'utf8');
                }
            });
        }
        return components;
    }

    // Evaluate a PHP-like expression against the context
    evaluate(expression, localContext = {}) {
        const ctx = { ...this.context, ...localContext };
        try {
            // Replace PHP arrow syntax -> with JS dot syntax .
            let jsExpr = expression.replace(/->/g, '.');
            // Replace $variable with ctx.variable
            jsExpr = jsExpr.replace(/\$([a-zA-Z0-9_]+)/g, 'ctx.$1');
            
            // Handle number_format (simplified)
            if (jsExpr.includes('number_format')) {
                // Remove number_format wrapper and just return fixed
                 jsExpr = jsExpr.replace(/number_format\(([^,]+)(?:,\s*(\d+))?\)/g, 'Number($1).toFixed($2 || 0)');
            }
            
            // Handle Str::limit (simplified)
            if (jsExpr.includes('Str::limit')) {
                jsExpr = jsExpr.replace(/Str::limit\(([^,]+),\s*(\d+)\)/g, '$1.substring(0, $2) + "..."');
            }
             // Handle Str::slug (simplified)
            if (jsExpr.includes('Str::slug')) {
                jsExpr = jsExpr.replace(/Str::slug\(([^)]+)\)/g, '$1.toLowerCase().replace(/ /g, "-")');
            }

            // Safe eval function
            const func = new Function('ctx', 'return ' + jsExpr);
            const result = func(ctx);
            return result === undefined || result === null ? '' : result;
        } catch (e) {
            // console.error(`Failed to eval: ${expression}`, e);
            return expression; // Return raw if fails, or empty string
        }
    }

    processDirectives(html, localContext = {}) {
        let processed = html;

        // 1. Handle @php blocks (Extract variables)
        processed = processed.replace(/@php([\s\S]*?)@endphp/g, (match, code) => {
            // Very naive parser for $var = ...
            const lines = code.split(';');
            lines.forEach(line => {
                if (line.trim().startsWith('$')) {
                    // Try to parse basic assignments
                    const parts = line.split('=');
                    const varName = parts[0].trim().replace('$', '');
                    let valueStr = parts.slice(1).join('=').trim();
                    
                    // Handle collect([...])
                    if (valueStr.startsWith('collect(')) {
                        valueStr = valueStr.substring(8, valueStr.lastIndexOf(')'));
                    }
                    
                    // Handle (object) cast
                    valueStr = valueStr.replace(/\(object\)\s*/g, '');

                    try {
                        // This uses eval to parse JSON/Array structures
                        // It's dangerous in production but fine for this dev tool
                        // We need to handle PHP array syntax [] vs JS []
                         // Replace PHP array [key => val] with JS {key: val} is too hard here
                         // We assume the user wrote JS-like arrays in the mock data for simplicity
                         // or we just use a simplified JSON.parse if possible.
                         
                         // For now, let's rely on the fact that I wrote valid JS objects in the previous step
                         // just with PHP syntax wrappers.
                         
                         // Let's replace '=>' with ':' for objects
                         valueStr = valueStr.replace(/=>/g, ':');
                         
                         // Eval the value
                         const val = eval('(' + valueStr + ')');
                         this.context[varName] = val;
                         
                    } catch (e) {
                        // console.log("Failed to parse PHP variable:", varName);
                    }
                }
            });
            return '';
        });

        // 2. Handle @foreach
        // Supports: @foreach($items as $item) ... @endforeach
        // Does NOT support nested loops well with this regex, but good for 1 level
        const loopRegex = /@foreach\s*\((.*?)\s+as\s+(.*?)\)([\s\S]*?)@endforeach/g;
        processed = processed.replace(loopRegex, (match, collectionExpr, itemVarStr, content) => {
            const collection = this.evaluate(collectionExpr, localContext);
            const itemVar = itemVarStr.replace('$', '').trim();
            
            if (!Array.isArray(collection)) return '';

            return collection.map((item, index) => {
                const loopContext = { ...localContext };
                loopContext[itemVar] = item;
                loopContext['loop'] = { iteration: index, index: index, first: index === 0, last: index === collection.length - 1 };
                
                // Recursively process directives inside the loop
                return this.processDirectives(content, loopContext);
            }).join('');
        });
        
         // 3. Handle @forelse (simplified to just foreach logic for now, ignoring empty)
        const forelseRegex = /@forelse\s*\((.*?)\s+as\s+(.*?)\)([\s\S]*?)@empty([\s\S]*?)@endforelse/g;
        processed = processed.replace(forelseRegex, (match, collectionExpr, itemVarStr, content, emptyContent) => {
             const collection = this.evaluate(collectionExpr, localContext);
             if (Array.isArray(collection) && collection.length > 0) {
                 return this.processDirectives(`@foreach(${collectionExpr} as ${itemVarStr})${content}@endforeach`, localContext);
             } else {
                 return this.processDirectives(emptyContent, localContext);
             }
        });


        // 4. Handle {{ $var }} echo
        processed = processed.replace(/{{\s*(.*?)\s*}}/g, (match, expr) => {
            return this.evaluate(expr, localContext);
        });
        
        // 5. Handle @if
        // Simple regex for @if(...) ... @endif
        processed = processed.replace(/@if\((.*?)\)([\s\S]*?)@endif/g, (match, condition, content) => {
             const result = this.evaluate(condition, localContext);
             return result ? this.processDirectives(content, localContext) : '';
        });

        return processed;
    }

    resolveComponents(html) {
        let processed = html;
        const componentRegex = /<x-([a-z0-9\.-]+)([^>]*?)(\/>|>(.*?)<\/x-\1>)/gs;

        // Loop until no more components found
        let depth = 0;
        while (depth < 10) {
            let found = false;
            processed = processed.replace(componentRegex, (match, name, attributes, close, slotContent) => {
                found = true;
                // Handle dot notation x-layouts.app -> layouts/app
                const cleanName = 'x-' + name.replace(/\./g, '/');
                
                // Fallback to check if it's a layout
                let template = this.components[cleanName];
                if (!template) {
                     // Try checking without x- prefix for layouts folder specifically if needed, 
                     // but for now assume x-navbar is components/navbar.blade.php
                     // and x-layouts.app is components/layouts/app.blade.php (which doesn't exist usually, it's layouts/app)
                     return match;
                }

                // ... (Attribute parsing logic same as before) ...
                const props = {};
                const attrRegex = /([a-zA-Z0-9_-]+)="([^"]*)"|([a-zA-Z0-9_-]+)='([^']*)'|([a-zA-Z0-9_-]+)/g;
                let attrMatch;
                while ((attrMatch = attrRegex.exec(attributes)) !== null) {
                    const key = attrMatch[1] || attrMatch[3] || attrMatch[5];
                    const value = attrMatch[2] || attrMatch[4] || true;
                    props[key] = value;
                }
                
                // Simple slot replacement
                let componentHtml = template.replace(/{{ \$slot }}/g, slotContent || '');
                
                // Replace props
                Object.keys(props).forEach(key => {
                     // Basic string replacement for props in components
                     // This is limited because components might use props in logic
                     componentHtml = componentHtml.replace(new RegExp(`\\$${key}`, 'g'), `'${props[key]}'`);
                });

                return componentHtml;
            });
            if (!found) break;
            depth++;
        }
        return processed;
    }

    compile(filePath) {
        let content = fs.readFileSync(filePath, 'utf8');
        this.context = {}; // Reset context per file

        // 1. Extract Sections
        const sections = {};
        content.replace(/@section\('([^']+)'\)([\s\S]*?)@endsection/g, (match, name, content) => {
            sections[name] = content;
            return '';
        });
        content.replace(/@section\('([^']+)',\s*'([^']+)'\)/g, (match, name, value) => {
            sections[name] = value;
            return '';
        });

        // 2. Put into Layout
        let html = this.layout;
        html = html.replace(/@yield\('content'\)/, sections['content'] || '');
        html = html.replace(/@yield\('title'(?:,\s*'([^']*)')?\)/, (match, defaultTitle) => {
            return sections['title'] || defaultTitle || 'Omnishop';
        });

        // 3. Process Logic (The new part)
        // We first process the logic in the content *before* resolving components fully
        // because components might need processed variables.
        html = this.processDirectives(html);

        // 4. Resolve Components (Simple)
        // html = this.resolveComponents(html); // Skipping complex component resolution for now to focus on raw blade

        // 5. Clean up Blade directives - MUST happen in correct order
        // First, replace asset() calls (with and without {{ }})
        html = html.replace(/\{\{\s*asset\('([^']+)'\)\s*\}\}/g, '/$1');
        html = html.replace(/\{\{\s*asset\("([^"]+)"\)\s*\}\}/g, '/$1');
        html = html.replace(/asset\('([^']+)'\)/g, '/$1'); // Catch any remaining unprocessed
        html = html.replace(/asset\("([^"]+)"\)/g, '/$1');
        
        // Then remove other directives
        html = html.replace(/@stack\('styles'\)/g, '');
        html = html.replace(/@stack\('scripts'\)/g, '');
        html = html.replace(/\{\{\s*csrf_token\(\)\s*\}\}/g, '');
        html = html.replace(/csrf_token\(\)/g, '');
        html = html.replace(/\{\{\s*str_replace\('_',\s*'-',\s*app\(\)->getLocale\(\)\)\s*\}\}/g, 'en');
        html = html.replace(/str_replace\('_',\s*'-',\s*app\(\)->getLocale\(\)\)/g, 'en');

        return html;
    }
}

// ... Rest of the file (execution logic) ...
// Main Build Process
const compiler = new BladeCompiler();

// Helper to recursively find all blade files in a directory
function findBladeFiles(dir, fileList = []) {
    const files = fs.readdirSync(dir);
    files.forEach(file => {
        const filePath = path.join(dir, file);
        const stat = fs.statSync(filePath);
        if (stat.isDirectory()) {
            findBladeFiles(filePath, fileList);
        } else if (path.extname(file) === '.blade.php') {
            fileList.push(filePath);
        }
    });
    return fileList;
}

console.log('🚀 Compiling Blade templates...');

// 1. Compile Main Index
try {
    const indexSrc = path.join(CONFIG.viewsDir, 'index.blade.php');
    if (fs.existsSync(indexSrc)) {
        const compiled = compiler.compile(indexSrc);
        fs.writeFileSync(path.join(CONFIG.outDir, 'index.html'), compiled);
        console.log(`✅ Compiled: index.blade.php -> index.html`);
    }
} catch (e) {
    console.error('❌ Error compiling index:', e);
}

// 2. Compile All Theme Pages Automatically
const themesDir = path.join(CONFIG.viewsDir, 'themes');
if (fs.existsSync(themesDir)) {
    const themeFiles = findBladeFiles(themesDir);
    
    themeFiles.forEach(srcPath => {
        try {
            // Get relative path from views dir (e.g., 'themes/startup/index.blade.php')
            const relativePath = path.relative(CONFIG.viewsDir, srcPath);
            // Convert to html path (e.g., 'themes/startup/index.html')
            const destPath = path.join(CONFIG.outDir, relativePath.replace('.blade.php', '.html'));
            
            ensureDir(path.dirname(destPath));
            const compiled = compiler.compile(srcPath);
            fs.writeFileSync(destPath, compiled);
            console.log(`✅ Compiled: ${relativePath} -> ${path.relative(CONFIG.outDir, destPath)}`);
        } catch (e) {
            console.error(`❌ Error compiling ${srcPath}:`, e);
        }
    });
}

console.log('✨ Build complete!');
