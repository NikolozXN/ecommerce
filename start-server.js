import http from 'http';
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { exec, spawn } from 'child_process';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const PORT = process.env.PORT || 3001;
const PUBLIC_DIR = path.join(__dirname, 'public');
const VIEWS_DIR = path.join(__dirname, 'resources', 'views');

const MIME_TYPES = {
    '.html': 'text/html',
    '.css': 'text/css',
    '.js': 'application/javascript',
    '.png': 'image/png',
    '.jpg': 'image/jpeg',
    '.svg': 'image/svg+xml',
    '.json': 'application/json'
};

let isCompiling = false;

function compileTemplates() {
    if (isCompiling) return;
    isCompiling = true;
    
    console.log('🔄 File changed. Re-compiling templates...');
    
    exec('node compiler.js', (error, stdout, stderr) => {
        isCompiling = false;
        if (error) {
            console.error(`❌ Build error: ${error}`);
            return;
        }
        console.log(stdout);
        console.log('✨ content updated. Refresh your browser.');
    });
}

// Initial Build
console.log('🚀 Starting Server & Compiler...');
compileTemplates();

// Watch for file changes in resources/views
console.log(`👀 Watching for changes in ${VIEWS_DIR}...`);
fs.watch(VIEWS_DIR, { recursive: true }, (eventType, filename) => {
    if (filename && filename.endsWith('.blade.php')) {
        compileTemplates();
    }
});

// Start Static Server
const server = http.createServer((req, res) => {
    let filePath = path.join(PUBLIC_DIR, req.url === '/' ? 'index.html' : req.url);
    
    // Handle nice URLs (e.g. /themes/fashion -> /themes/fashion/index.html)
    if (!path.extname(filePath)) {
        if (fs.existsSync(filePath + '.html')) {
            filePath += '.html';
        } else if (fs.existsSync(path.join(filePath, 'index.html'))) {
            filePath = path.join(filePath, 'index.html');
        }
    }

    const extname = path.extname(filePath).toLowerCase();
    const contentType = MIME_TYPES[extname] || 'application/octet-stream';

    fs.readFile(filePath, (error, content) => {
        if (error) {
            if (error.code === 'ENOENT') {
                // Try finding it as a directory index if not found
                if (fs.existsSync(path.join(filePath, 'index.html'))) {
                    const indexContent = fs.readFileSync(path.join(filePath, 'index.html'));
                    res.writeHead(200, { 'Content-Type': 'text/html' });
                    res.end(indexContent, 'utf-8');
                    return;
                }

                console.error(`404: ${req.url}`);
                res.writeHead(404);
                res.end(`
                    <html>
                        <head><title>404 Not Found</title></head>
                        <body style="font-family: sans-serif; background: #111; color: #fff; padding: 2rem;">
                            <h1>404 Not Found</h1>
                            <p>Could not find: ${req.url}</p>
                            <hr style="border-color: #333;">
                            <a href="/" style="color: #6366f1;">Return Home</a>
                        </body>
                    </html>
                `);
            } else {
                res.writeHead(500);
                res.end(`Server Error: ${error.code}`);
            }
        } else {
            res.writeHead(200, { 'Content-Type': contentType });
            res.end(content, 'utf-8');
        }
    });
});

server.listen(PORT, () => {
    console.log(`\n🚀 Server running at http://localhost:${PORT}`);
    console.log(`👉 Main Demo: http://localhost:${PORT}`);
    console.log(`👉 Startup Theme: http://localhost:${PORT}/themes/startup`);
});
