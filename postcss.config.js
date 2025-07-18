const purgecss = require("@fullhuman/postcss-purgecss");

module.exports = {
  plugins: [
    purgecss({
      content: ["./**/*.html", "./**/*.php", "./**/*.js"],
      safelist: [/^betchagame-/, /^popup-/],
    }),
    require("cssnano"),
  ],
};
