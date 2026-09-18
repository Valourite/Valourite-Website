// Used to build all resource assets
// This file is needed for Vite to work with Laravel

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig(({ command }) => {
    const config = {
        plugins: [
            laravel({
                input: ["resources/css/app.css", "resources/js/app.js"],
                refresh: true,
            }),
            tailwindcss(),
        ],
    };

    // Only configure the Vite development server when running `npm run dev`.
    // These environment variables are provided by DDEV and do not exist
    // on the production/staging server during `npm run build`.
    if (command === 'serve' && process.env.DDEV_HOSTNAME) {
        config.server = {
            host: '0.0.0.0',
            port: 5173,
            strictPort: true,

            origin: `${process.env.DDEV_PRIMARY_URL_WITHOUT_PORT}:5173`,

            cors: {
                origin: new RegExp(
                    `https?:\\/\\/(${process.env.DDEV_HOSTNAME
                        .split(',')
                        .map((h) => h.replace('*', '[^.]+'))
                        .join('|')})(?::\\d+)?$`
                ),
            },
        };
    }

    return config;
});

