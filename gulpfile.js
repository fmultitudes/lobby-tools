var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix
        //.phpUnit()

        //copy
        .copy('bower_components/fontawesome/fonts', 'public/build/fonts')
        .copy('bower_components/bootstrap/dist/fonts', 'public/build/fonts/bootstrap')
        .copy('bower_components/jquery/dist/jquery.min.js', 'resources/assets/js/vendor')
        .copy('bower_components/bootstrap/dist/js/bootstrap.min.js', 'resources/assets/js/vendor')
        .copy('bower_components/modernizer/modernizr.js', 'resources/assets/js/vendor')
        .copy('bower_components/angular/angular.min.js', 'resources/assets/js/vendor')
        
        .copy('bower_components/bootstrap/dist/css/bootstrap.min.css', 'resources/assets/css/vendor')
        .copy('bower_components/fontawesome/css/font-awesome.min.css', 'resources/assets/css/vendor')

        .sass([ // Process front-end stylesheets
                'frontend/main.scss'
            ], 'resources/assets/css/frontend/main.css')
        .styles([  // Combine pre-processed CSS files
                'frontend/main.css'
            ], 'public/css/frontend.css')
        .scripts([ // Combine front-end scripts
                'plugins.js',
                'frontend/main.js'
            ], 'public/js/frontend.js')

        .sass([ // Process back-end stylesheets
            'backend/main.scss',
            'backend/skin.scss',
            'backend/plugin/toastr/toastr.scss'
        ], 'resources/assets/css/backend/main.css')
        .styles([ // Combine pre-processed CSS files
                'backend/main.css'
            ], 'public/css/backend.css')
        .scripts([ // Combine back-end scripts
                'plugins.js',
                'backend/main.js',
                'backend/plugin/toastr/toastr.min.js',
                'backend/custom.js'
            ], 'public/js/backend.js')

        //vendor
        .styles([ // Combine vendor CSS files
                'vendor/bootstrap.min.css',
                'vendor/font-awesome.min.css',
            ], 'public/css/vendor.css')
        .scripts([ // Combine vendor scripts
                'vendor/jquery.min.js',
                'vendor/modernizr.js',
                'vendor/bootstrap.min.js',
                'vendor/angular.min.js'
            ], 'public/js/vendor.js')

        // Apply version control
        .version(["public/css/vendor.css", "public/js/vendor.js", "public/css/frontend.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"]);
});

/**
 * Uncomment for LESS version
 */
/*elixir(function(mix) {
    mix
        .phpUnit()

        // Copy webfont files from /vendor directories to /public directory.
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts/font-awesome')
        .copy('node_modules/bootstrap-less/fonts', 'public/build/fonts/bootstrap')
        .copy('node_modules/bootstrap-less/js/bootstrap.min.js', 'public/js/vendor')

        .less([ // Process front-end stylesheets
            'frontend/main.less'
        ], 'resources/assets/css/frontend/main.css')
        .styles([  // Combine pre-processed CSS files
            'frontend/main.css'
        ], 'public/css/frontend.css')
        .scripts([ // Combine front-end scripts
            'plugins.js',
            'frontend/main.js'
        ], 'public/js/frontend.js')

        .less([ // Process back-end stylesheets
            'backend/AdminLTE.less',
            'backend/plugin/toastr/toastr.less'
        ], 'resources/assets/css/backend/main.css')
        .styles([ // Combine pre-processed CSS files
            'backend/main.css'
        ], 'public/css/backend.css')
        .scripts([ // Combine back-end scripts
            'plugins.js',
            'backend/main.js',
            'backend/plugin/toastr/toastr.min.js',
            'backend/custom.js'
        ], 'public/js/backend.js')

        // Apply version control
        .version(["public/css/frontend.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"]);
});*/
