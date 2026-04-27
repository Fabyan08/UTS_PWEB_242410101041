
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {

            fontFamily: {
                sans: ["Inter", "sans-serif"],
                display: ["Bebas Neue", "sans-serif"],
            },
            colors: {
                bgDark: "#070707",
                bgPanel: "#0f0f0f",
                accent: "#d9381e",
                accentHover: "#b02a15",
            },
        },
    },
    plugins: [],
};
