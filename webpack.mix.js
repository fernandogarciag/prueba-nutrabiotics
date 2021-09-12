const mix = require("laravel-mix");
if (!mix.inProduction()) {
  mix.webpackConfig({
    devtool: "inline-source-map",
  });
}
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .css("resources/css/style.css", "public/css")
  .sourceMaps()
  .js("resources/js/main.js", "public/js")
  .sourceMaps()
  .js("resources/js/shoe-variants.js", "public/js")
  .sass("resources/sass/app.scss", "public/css")
  .js("resources/js/app.js", "public/js")
  .js("resources/js/crud/index.js", "public/js/crud")
  .react()
  .js("resources/js/crud/show.js", "public/js/crud")
  .react()
  .js("resources/js/crud/create-edit.js", "public/js/crud")
  .react();
