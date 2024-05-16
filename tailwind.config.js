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
            },
            backgroundImage: {
                'dark-blue-gradient': 'linear-gradient(to right bottom, #222c41, #1f283c, #1b2437, #182132, #151d2d, #141b2b, #121a29, #111827, #111827, #111827, #111827, #111827);'
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
