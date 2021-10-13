let mix = require("laravel-mix");
require('laravel-mix-imgmin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

/*
 |--------------------------------------------------------------------------
 | Configuration
 |--------------------------------------------------------------------------
 */
mix
  .setPublicPath("assets")
  .disableNotifications()
  .options({
    processCssUrls: false,
    postCss: [
      require("postcss-assets"),
      require("postcss-zindex"),
      require("postcss-svg"),
      require("postcss-svgo"),
      require("postcss-clean")({
        inliner: true
      })
    ]
  });

/*
 |--------------------------------------------------------------------------
 | SASS
 |--------------------------------------------------------------------------
 */
mix.sass("src/sass/styles.scss", "css");

/*
 |--------------------------------------------------------------------------
 | JS
 |--------------------------------------------------------------------------
 */
mix.js("src/js/scripts.js", "js");

/*
 |--------------------------------------------------------------------------
 | IMAGE OPTIMIZATION
 |--------------------------------------------------------------------------
 */
 mix.imgmin({
  input: 'src/img/',
  publicPath: 'assets',
  output: 'img',
  tinyPngKey: null,
  debug: false
});
