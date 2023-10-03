import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        screens: {
            sm: "576px",
            md: "768px",
            lg: "992px",
        },
        fontFamily: {
            sans: ["Poppins", "sans-serif"],
        },
        extend: {
            colors: {
                navy: "#121F3E",
                blue: {
                    primary: "#005596",
                    secondary: "#2579D1",
                    accent: "#E1F0FF",
                    shadow: "#7E8CAC",
                },
                red: "#D71920",
                orange: "#FEBD57",
                green: {
                    primary: "#50A718",
                    secondary: "#2ED16C",
                },
                grey: {
                    primary: "#66696F",
                    secondary: "#ABB3C4",
                    accent: "#E7EAF5",
                    stroke: "#F2F2F2",
                },
                background: "#F8F9Fd",
            },
        },
    },

    plugins: [forms],
};
