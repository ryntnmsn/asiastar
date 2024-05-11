/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                'dark-blue': '#1a253c',
                'dark-blue-hover': '#212c45',
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
