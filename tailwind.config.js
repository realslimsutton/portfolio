const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],
    theme: {
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px'
        },

        extend: {
            fontFamily: {
                sans: [ 'Inter', ...defaultTheme.fontFamily.sans ],
                serif: [ 'Lobster', ...defaultTheme.fontFamily.serif ]
            }
        }
    },
    plugins: [ require('@tailwindcss/forms'), require('@tailwindcss/typography') ]
};
