import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/js/core.min.js',
                    dest: 'public/js',
                },
                {
                    src: 'resources/js/html5shiv.min.js',
                    dest: 'public/js',
                },
                {
                    src: 'resources/js/pointer-events.min.js',
                    dest: 'public/js',
                },
                {
                    src: 'resources/js/script.js',
                    dest: 'public/js',
                }
            ],
        }),
        laravel([
            'resources/css/app.css',
            'resources/css/bootstrap.css',
            'resources/css/fonts.css',
            'resources/css/style.css',
            'resources/css/panel.css',
            'resources/js/app.js',
            'resources/js/main.js',
        ]),
    ],
    server: {
        host: 'localhost',
        port: 5173,
        cors: {
            origin: 'https://copy.com', // Позволява заявки от copy.com
            methods: ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
            allowedHeaders: ['Content-Type', 'Authorization'],
        }
    }
});
