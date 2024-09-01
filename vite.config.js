import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { glob } from "glob";

/**
 * Get Files from a directory
 * @param {string} query
 * @returns array
 */
function GetFilesArray(query) {
    return glob.sync(query);
}

const LibsCssFiles = GetFilesArray("resources/assets/css/*.css");

export default defineConfig({
    plugins: [
        laravel({
            input: [...LibsCssFiles],
            refresh: true,
        }),
    ],
    build: {
        chunkSizeWarningLimit: 3000,
    },
});
