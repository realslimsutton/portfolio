const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: [ 'Inter', ...defaultTheme.fontFamily.sans ]
            }
        }
    },
    plugins: [ require('@tailwindcss/forms'), require('@tailwindcss/typography') ]
};
