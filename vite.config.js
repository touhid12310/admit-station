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
/**
 * Js Files
 */
// Page JS Files
const pageJsFiles = GetFilesArray("resources/assets/js/*.js");
const vendorJsFiles = GetFilesArray("resources/assets/js/vendor/*.js");

/**
 * Scss Files
 */
// Processing Core, Themes & Pages Scss Files
const LibsCssFiles = GetFilesArray("resources/assets/css/*.css");

export default defineConfig({
    plugins: [
        laravel({
            input: [...pageJsFiles, ...vendorJsFiles, ...LibsCssFiles],
            refresh: true,
        }),
    ],
    build: {
        chunkSizeWarningLimit: 3000,
    },
});
