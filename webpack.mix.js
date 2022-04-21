const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
//

mix.minify('resources/js/main.js', 'public/js/main.js')

mix
    .minify('resources/js/components/accordion.min.js', 'public/js/components/accordion.min.js')
    .minify('resources/js/components/select.js', 'public/js/components/select.js')
    .minify('resources/js/components/repeater.js', 'public/js/components/repeater.js')

    .minify('resources/js/components/submit/main.js', 'public/js/components/submit/main.js')

    .minify('resources/js/components/filters/main.js', 'public/js/components/filters/main.js')
    .minify('resources/js/components/ajax/filters.js', 'public/js/components/ajax/filters.js')

    .minify('resources/js/pages/about.js', 'public/js/pages/about.js')
    .minify('resources/js/pages/app-submission.js', 'public/js/pages/app-submission.js')
    .minify('resources/js/pages/buildings.js', 'public/js/pages/buildings.js')
    .minify('resources/js/pages/estate-card.js', 'public/js/pages/estate-card.js')
    .minify('resources/js/pages/franchise.js', 'public/js/pages/franchise.js')
    .minify('resources/js/pages/home.js', 'public/js/pages/home.js')
    .minify('resources/js/pages/hsm.js', 'public/js/pages/hsm.js')
    .minify('resources/js/pages/prop-valuation.js', 'public/js/pages/prop-valuation.js');

mix.copy('resources/libs', 'public/libs');
mix.copy('resources/img', 'public/img');

mix.copy('resources/js/admin', 'public/js/admin');
mix.copy('resources/css/admin', 'public/css/admin');
mix.sass('resources/css/admin/customize.scss', 'public/css/admin/customize.css').options({
    processCssUrls: true
});

mix.sass('resources/css/style.scss', 'public/css/style.css').options({
    processCssUrls: true
})
