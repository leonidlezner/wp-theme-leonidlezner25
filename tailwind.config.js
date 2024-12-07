module.exports = {
  content: ["./src/**/*.php", "./inc/**/*.php", "./resources/**/*.js"],
  theme: {
    extend: {
      colors: {
        color1: "#131313",
        color2: "#333333",
        color3: "#131313",
        color4: "#faca13",
        color5: "#faca13",
        /*         color1: "#2F324E",
        color2: "#444767",
        color3: "#72779E",
        color4: "#EBB481",
        color5: "#F9E5D2", */
      },
      typography: ({ theme }) => ({
        leonidlezner: {
          css: {
            h1: {
              fontFamily: "Roboto",
              fontWeight: "bold",
            },
            h2: {
              fontFamily: "Roboto",
              fontWeight: "bold",
            },
            h3: {
              fontFamily: "Roboto",
              fontWeight: "bold",
            },
            h4: {
              fontFamily: "Roboto",
              fontWeight: "bold",
            },
            strong: {
              color: theme("colors.color2"),
              fontWeight: "bold",
            },
            "--tw-prose-body": theme("colors.color2"),
            "--tw-prose-headings": theme("colors.color3"),
            a: {
              color: theme("#ff0000"),
            },
          },
        },
      }),
    },
    fontFamily: {
      sans: ["Nunito", "sans"],
      heading: ["Roboto", "sans"],
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/typography"),
    require("@tailwindcss/aspect-ratio"),
  ],
};
