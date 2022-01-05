const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'sans': ['Quicksand', 'Roboto', ...defaultTheme.fontFamily.sans],
                'ubuntu': ['Ubuntu', 'Nunito' , ...defaultTheme.fontFamily.sans],
                'quicksand': ['Quicksand', ...defaultTheme.fontFamily.sans],
            },
            ringWidth: {
                '3': '3px',
            }
        },
    },

    // plugins: [require('@tailwindcss/forms')],
};
