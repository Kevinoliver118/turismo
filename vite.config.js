import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/predeterminados/navbar.css',
                'resources/css/welcome/diseños.css',
            ],
            refresh: true,
        }),
    ],
});
