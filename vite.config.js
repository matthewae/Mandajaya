import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'; // Import the path module

export default defineConfig({
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'), // Add this if you are using bootstrap
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // This is the crucial part!
        manifest: true, // Important for Laravel integration
    },
});