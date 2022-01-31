const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            screens: {
                'sm': '576px',
                'md': '768px',
                'lg': '992px',
                'xl': '1280px',
                '2xl': '1536px',
            },
            fontFamily: {
                'sans': ['Quicksand', 'Roboto', ...defaultTheme.fontFamily.sans],
                'ubuntu': ['Ubuntu', 'Quicksand' , ...defaultTheme.fontFamily.sans],
                'quicksand': ['Quicksand', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'dark': '#211F1F',
            },
            ringWidth: {
                '3': '3px',
            }
        },
    },

    // plugins: [require('@tailwindcss/forms')],
};
