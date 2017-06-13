module.exports = function(grunt) {

    grunt.initConfig({
        watch: {
            sass: {
                files: ['!wp-content/themes/storringtonpr/'],
                tasks: ['sass', 'autoprefixer', 'shell']
            }
        },
        sass: {
            options: {
                sourceMap: false
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: 'wp-content/themes/storringtonpr',
                    src: ['scss/*.scss'],
                    flatten: true,
                    dest: 'wp-content/themes/storringtonpr/assets/css',
                    ext: '.css'
                }]
            }
        },
        autoprefixer: {
            options: {
                browsers: ['last 2 versions'],
                map: true // Update source map (creates one if it can't find an existing map)
            },

            // Prefix all files
            multiple_files: {
                src: 'wp-content/themes/storringtonpr/assets/css/*.css'
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        'wp-content/themes/storringtonpr/**'
                    ]
                },
                options : {
                    proxy: '127.0.0.1:8888',
                    watchTask: true,
                    injectChanges: false
                }
            }
        }
    });

    require('load-grunt-tasks')(grunt);

    grunt.registerTask('default', ['sass', 'autoprefixer', 'browserSync', 'watch']);

};
