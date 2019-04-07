let mix = require('laravel-mix');
let tailwindcss = require("tailwindcss");

require('laravel-mix-purgecss');

mix.postCss("./src/styles/app.css", "web/static/css", [tailwindcss("./tailwind.js")])
    .purgeCss({
        enabled: mix.inProduction(),
        globs: [
            path.join(__dirname, 'src/views/**/*.twig'),
        ],
        extensions: ['twig'],
    });

mix.js('src/scripts/app.js', 'web/static/js');