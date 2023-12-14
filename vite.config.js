import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});

const path = require('path');

module.exports = {
  build: {
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'resources/js/main.js'),
      },
    },
  },
  server: {
    proxy: {
      '/storage': {
        target: 'http://localhost:8000',
        changeOrigin: true,
      },
    },
  },
};

