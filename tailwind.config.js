/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#ed1e24",
                secondary: "#f78d1e",
                tertiary: "#2c3891",
                divider: "#d9d9d9",
                dark: "#161616",
            },
            boxShadow: {
                "md-right": "9px 8px 18px -13px rgba(0,0,0,0.53);",
            },
        },
    },
    plugins: [],
};
