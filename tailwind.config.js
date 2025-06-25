const { colors } = require('laravel-mix/src/Log');
const defaults = require('tailwindcss/defaultTheme');

module.exports = {
    content: require('fast-glob').sync([
        'source/**/*.html',
        'source/**/*.md',
        'source/**/*.js',
        'source/**/*.php',
        'source/**/*.vue',
    ]),
    options: {
        safelist: [/language/, /hljs/, /mce/],
    },
    theme: {
        extend: {
            fontFamily: {
                body: ['"Instrument Sans"', ...defaults.fontFamily.sans],
                display: ['"Clash Display"', ...defaults.fontFamily.serif],
            },
            colors: {
                primary: '#316FAF',
                'primary-hovered': '#215183',
                'primary-clicked': '#16395C',
                'text': '#4D4D4D',
                'text-on-dark': '#E3E3E3',
                'headings-dark': '#11273D',
                'headings-light': '#11273D',
                bg: '#FFFFFF',
                'bg-subtle': '#ECF4FA',
                'bg-alt': '#F6FBFF',
                'bg-section': '#3C536A',
                'bg-light-surface': '#FEFEFE',
                'bg-medium-surface': '#BFD2E6',
                'stroke': '#D3E0EB',
                'stroke-light': '#EBF3FA'
            }
        },
        fontSize: {
            xs: '.5rem',
            sm: '.625rem',
            base: '.875rem',
            lg: '1rem', //base
            xl: '1.25rem',
            '2xl': '1.5rem',
            '3xl': '2rem',
            '4xl': '2.625rem',
            '5xl': '3.5rem',
            '6xl': '4.6875rem',
        },
    },
};
