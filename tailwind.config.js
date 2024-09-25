const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                bright_red: "#ff1000",
                featured_card_bg:"#f1f1f1",
                yellow_bg:"#FFF200",
                tt_black:"#000000",
                tt_white:"#ffffff",
            },
        },
    },

    plugins: [require('@tailwindcss/forms'),require("tw-elements/dist/plugin.cjs")],
    darkMode: "class"
};
