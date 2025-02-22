import { defineConfig } from 'vite';
//import inspect from 'vite-plugin-inspect'
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
       // inspect(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
