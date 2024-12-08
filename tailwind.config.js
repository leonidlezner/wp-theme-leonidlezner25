module.exports = {
  content: ["./src/**/*.php", "./inc/**/*.php", "./resources/**/*.js"],
  theme: {
    extend: {
      colors: {
        color1: "#171717",
        color2: "#333333",
        color3: "#333333",
        color4: "#faca13",
        color5: "#faca13",
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
