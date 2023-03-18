let mix = require('laravel-mix');

mix.disableNotifications();

mix.js('build/js/main.js', 'dist/js/').setPublicPath('dist');
mix.js('build/js/custom.js', 'dist/js/').setPublicPath('dist');

mix.sass('build/sass/main.scss', 'dist/css/').setPublicPath('dist');

mix.styles([
    'build/css/fonts.css'
], 'dist/css/vendor.css');

mix.copy('build/fonts', 'dist/fonts');
mix.copy('build/images', 'dist/images');

mix.browserSync({
    proxy: 'http://aq-academy.local/',
    host: 'aq-academy.local',
    open: 'external',
    files: [
        'dist/css/*.css',
        'dist/js/*.js',
        'dist/fonts/*',
        '**/*.php'
    ]
});