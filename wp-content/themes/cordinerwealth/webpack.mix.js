let mix = require('laravel-mix');

const tailwindcss = require('tailwindcss');
// const isotope = require('isotope-layout');

mix.options({
    processCssUrls: false,
    uglify: {},
    purifyCss: false,
    postCss: [require('autoprefixer')],
    clearConsole: true
});

mix.js('resources/assets/scripts/main.js', 'dist/scripts')
    .copyDirectory('resources/assets/images', 'dist/images')
    .copyDirectory('resources/assets/fonts', 'dist/fonts')
    .sass('resources/assets/styles/main.scss', 'dist/styles', {
      implementation: require('node-sass')
    })
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });
