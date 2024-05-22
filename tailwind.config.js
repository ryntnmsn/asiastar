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
                // 'dark-blue-gradient': 'linear-gradient(to right bottom, #222c41, #1f283c, #1b2437, #182132, #151d2d, #141b2b, #121a29, #111827, #111827, #111827, #111827, #111827);'
                'dark-mode': 'linear-gradient(to right top, #09152c, #081831, #071a37, #061c3c, #041f42, #042349, #032650, #032a57, #072f61, #0c356b, #113a75, #17407f)',
                'light-mode': 'linear-gradient(to right top, #ffffff, #fffdff, #fffafa, #fff9f1, #fffae9, #fffadd, #fffad1, #fdfbc6, #fdf8b2, #fdf49e, #fef089, #ffec73)'
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
