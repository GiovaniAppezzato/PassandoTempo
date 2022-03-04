const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js'
    ],

    safelist: [
        'animate-spin', 'rotate-180',
        'dropdown-active', 'dropdown-animate',
        'modal--success', 'modal--danger', 'modal--warning'
    ],

    theme: {
        extend: {
            screens: {
                'sm': '576px',
                'md': '768px',
                'lg': '992px',
                'xl': '1280px',
                '2xl': '1536px',
                '3xl': '1820px',
            },
            fontFamily: {
                'sans': ['Nunito', 'Quicksand', ...defaultTheme.fontFamily.sans],

                'nunito': ['Nunito', ...defaultTheme.fontFamily.sans],
                'quick': ['Quicksand', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'dark': '#211F1F',
            },
            ringWidth: {
                '3': '3px'
            }
        },
    },

    // plugins: [require('@tailwindcss/forms')]
};
