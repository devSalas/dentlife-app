import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "primary": "#1D1818",
                "secondary": "#f2efe9",
                "third": "#FFFFFFF",
                "fourth": "#D0B7A4",
                "fifth": "#ae9067"
            },
            boxShadow: {
                '3xl': '0px 0px 20px rgb(0 0 0 / 0.50)',
            },
            fontFamily: {
                
            }
        },
    },

    plugins: [forms],
};
