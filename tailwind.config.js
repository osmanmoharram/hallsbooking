const colors = require('tailwindcss/colors');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                coolgray: colors.coolGray
            },
        },

        variants: {
            extend: {
                opacity: ['disabled'],
            },
        },

    },
    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-rtl'),
    ],
}