const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your WordPress theme. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('src/js/app.js', 'assets/js')
   .postCss('src/css/app.css', 'assets/css', [
     require('postcss-import'),
     require('tailwindcss'),
     require('autoprefixer'),
   ])
   .options({
     processCssUrls: false,
   })
   .sourceMaps(false, 'source-map')
   .version();

// Copier les polices
mix.copyDirectory('src/fonts', 'assets/fonts');

// Configuration pour le mode production
if (mix.inProduction()) {
  mix.options({
    terser: {
      extractComments: false,
      terserOptions: {
        compress: {
          drop_console: true,
        },
      },
    },
    cssNano: {
      discardComments: {
        removeAll: true,
      },
    },
  });
}
