const purgecss = require("@fullhuman/postcss-purgecss");

module.exports = {
  plugins: [
    "postcss-preset-env",
    require("autoprefixer"),
    purgecss({
      content: ["../**/*.php"],
    }),
  ],
};
