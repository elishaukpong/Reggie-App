import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'nav-gray': {
                    50: '#F0F2F5',
                    100:'#98A2B3',
                    500: '#31373D',
                },
                'primary-pink': {
                    50: '#FFF5F8',
                    100:"#FBF1F1",
                    500:'#FF3360',
                    600: '#FF7896'
                },
                'primary-red':'#D42620',
            },
        },
    },

    plugins: [forms, typography],
};
