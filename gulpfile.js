// Importing the laravel-elixir;
var elixir = require("laravel-elixir");
// Importing the gulp initaitor;
var gulp = require("gulp");

// Init the elixir;
elixir(function(mix) {

    var bowerPath = "bower/vendor/";
    // Converting Sass;
    mix.sass('app.scss', 'public/assets/sass/app.scss');

    // Converting Js;
    mix.scripts([
            bowerPath + '/foundation-sites/dist/js/foundation.min.js',
            bowerPath + '/jquery/dist/jquery.min.js',
            bowerPath + '/motion-ui/dist/motion-ui.min.js',
            bowerPath + '/slick-carousel/slick/slick.min.js'
        ],
        'public/assets/app.js', // output-directory;
        'resources/assets/' // base-directory;
    )

    // Converting Css;
    mix.styles([
            'css/app.css',
            bowerPath + 'slick-carousel/slick/slick.css'
        ],
        'public/assets/css/app.css', // output-directory;
        'resources/assets/' // base-directory;
    )

})