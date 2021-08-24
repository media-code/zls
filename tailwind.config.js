const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            width:{
                '2/1':'200%',
            },
            fontFamily: {
                sans: ['"Helvetica Neue"', ...defaultTheme.fontFamily.sans],
                serif: ['"PT Serif"', ...defaultTheme.fontFamily.serif],
                title: ['"Helvetica Neue Condensed"', ...defaultTheme.fontFamily.sans],
                icons: ['"Font Awesome 6"'],
            },
        },
        textColor: {
            white: 'var(--white)',
            primary: 'var(--primary)',
            secondary: 'var(--secondary)',
            darkgrey: 'var(--darkgrey)',
            mediumgrey: 'var(--mediumgrey)',
            softgrey:'var(--softgrey)',
            grey: 'var(--grey)',
            lightgrey: 'var(--lightgrey)',
        },
        colors: {
    		white: 'var(--white)',
    		primary: 'var(--primary)',
    		secondary: 'var(--secondary)',
    		darkgrey: 'var(--darkgrey)',
    		mediumgrey: 'var(--mediumgrey)',
            softgrey:'var(--softgrey)',
    		grey: 'var(--grey)',
    		lightgrey: 'var(--lightgrey)',
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
