import { defineConfig } from "vite";
import liveReload from "vite-plugin-live-reload";

export default ({ mode }) => {
  return defineConfig({
    plugins: [liveReload(["src/**/*.php", "src/**/*.css", "src/**/*.js"])],

    publicDir: "public",

    server: {
      host: "localhost",
      open: process.env.VITE_SITE_URL,
    },

    build: {
      outDir: "public/dist",

      assetsDir: ".",

      emptyOutDir: true,

      copyPublicDir: false,

      manifest: true,

      rollupOptions: {
        input: ["src/js/app.js", "src/css/app.css"],
      },
    },
  });
};
