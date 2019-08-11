let mix = require('laravel-mix');

mix.js('src/js/site.js', 'build/js/');
mix.sass('src/scss/site.scss', 'build/css').options({ processCssUrls: false });
mix.copy('src/fontawesome/webfonts/', 'build/webfonts/');

if (!mix.inProduction()) {
 mix.browserSync({
   open: 'external',
   host: 'garden.test',
   proxy: 'http://garden.test/',
   browser: "google chrome",
   files: [
    '*.php',
    'build/css/*.css',
    'build/js/*.js'
   ]
 });
}