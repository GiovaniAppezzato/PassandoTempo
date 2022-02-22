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

mix
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])

    .postCss('resources/css/modificadores.css', 'public/css/app.css')
    .postCss('resources/css/postagem.css', 'public/css/postagem.css')

    .js('resources/js/frontend.js', 'public/js')
    .js('resources/js/usuario/editar-perfil.js', 'public/js/usuario')
    .js('resources/js/postagem/create.js', 'public/js/postagem/create.js')

    /* RUN TERMINAL TO COPY: "npx mix"
    .copyDirectory('node_modules/@fortawesome/fontawesome-free/js', 'public/fontawesome/js')
     */
    .version();
