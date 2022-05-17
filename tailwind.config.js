module.exports = {
    darkMode: "class",
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {},
    },
    plugins: [
        require("daisyui"),
    ],
    daisyui: {
        themes: [
            "light",
            "dark"
            // "corporate",
            // "business",
            // {
            //     tealLight: {
            //         "primary": "#059669",
            //         "secondary": "#0891b2",
            //         "accent": "#4f46e5",
            //         "neutral": "#3D4451",
            //         "base-100": "#f3f4f6",
            //         "info": "#3ABFF8",
            //         "success": "#36D399",
            //         "warning": "#FBBD23",
            //         "error": "#F87272",
            //     },
            //     tealDark: {
            //         "primary": "#34d399",
            //         "secondary": "#22d3ee",
            //         "accent": "#818cf8",
            //         "neutral": "#3D4451",
            //         "base-100": "#1f2937",
            //         "info": "#3ABFF8",
            //         "success": "#36D399",
            //         "warning": "#FBBD23",
            //         "error": "#F87272",
            //     },
            // },
        ],
        darkTheme: "dark",
    }
};
