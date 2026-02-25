import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            keyframes: {
                slideInUp: {
                    from: { opacity: 0, transform: "translateY(100%)" }, // Empieza desde abajo
                    to: { opacity: 1, transform: "translateY(0)" }, // Se coloca en su posición final
                  },
                },
                colors:{
                    fucsia:'#ed0e64',
                    celeste:'#00adef',
                    dorado:'#d2b493',
                customBlue: '#30445c',
                customSky:'#30dfbd',
                customPurple:'#4c2748',
                customazu:'#05202b',
                },
            fontFamily: {
                 baloo: ['"Baloo 2"', 'sans-serif'],
                animation: {
                    'spin-slow': 'spin 10s linear infinite',
                    slideInUp: "slideInUp 0.8s ease-out",
                  },
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};
