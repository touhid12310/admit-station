import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/assets/scss/main.scss", "resources/js/app.js"],
            refresh: [
                'routes/**',
                'resources/views/**',
                'app/Http/Livewire/**',
                'app/Filament/**',
            ],
        }),
    ],
});
