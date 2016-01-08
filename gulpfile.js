var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    // Sass
    var options = {
        includePaths: [
            'node_modules/foundation-sites/scss',
            'node_modules/font-awesome/scss',
            'node_modules/motion-ui/src',
            'node_modules/foundation-sites/js/foundation.core.js'

        ]
    };

    mix.sass('app.scss', null, options);

    // Javascript
    var jQuery = '../../../node_modules/jquery/dist/jquery.js';
    var foundationJsFolder = '../../../node_modules/foundation-sites/js/';

    mix.scripts([
       jQuery,
       foundationJsFolder + 'foundation.core.js',
       // Include any needed components here. The following are just examples.
       foundationJsFolder + 'foundation.util.mediaquery.js',
       foundationJsFolder + 'foundation.util.keyboard.js',
       foundationJsFolder + 'foundation.util.timerAndImageLoader.js',
       foundationJsFolder + 'foundation.tabs.js',
       foundationJsFolder + 'foundation.responsiveMenu.js',
       foundationJsFolder + 'foundation.util.mediaQuery.js',   
       foundationJsFolder + 'foundation.util.triggers.js',    
       foundationJsFolder + 'foundation.responsiveToggle.js', 
       foundationJsFolder + 'foundation.dropdown.js', 
       foundationJsFolder + 'foundation.drilldown.js', 
       foundationJsFolder + 'foundation.dropdownMenu.js', 
       foundationJsFolder + 'foundation.reveal.js',   
       foundationJsFolder + 'foundation.toggler.js',
       foundationJsFolder + 'foundation.tabs.js',
       foundationJsFolder + 'foundation.util.nest.js',
       foundationJsFolder + 'foundation.util.box.js',
       foundationJsFolder + 'foundation.util.keyboard.js',
       foundationJsFolder + 'foundation.util.motion.js', 
       foundationJsFolder + 'foundation.equalizer.js',
       foundationJsFolder + 'foundation.sticky.js',
       

       // This file initializes foundation
       'start_foundation.js'
    ]);


    // styles css



});