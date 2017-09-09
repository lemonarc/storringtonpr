const path = require('path');
const AssetsPlugin = require('assets-webpack-plugin');
const assetsPluginInstance = new AssetsPlugin();

module.exports = function (grunt) {
  grunt.initConfig({
    watch: {
      sass: {
        files: ['www/scss/**'],
        tasks: ['autoprefixer', 'sass']
      },
      webpack: {
        files: ['www/js/**'],
        tasks: ['webpack']
      },
      nanoc: {
        files: ['www/content/**'],
        tasks: ['shell']
      }
    },
    webpack: {
      options: {
        watch: false
      },
      dev: {
        entry: './www/js/index.js',
        output: {
          filename: '[hash].js',
          path: path.resolve(__dirname, 'www/content/js')
        },
        plugins: [assetsPluginInstance]
      }
    },
    shell: {
      options: {
        stderr: false
      },
      target: {
        command: 'cd www && nanoc'
      }
    },
    sass: {
      options: {
        sourceMap: false
      },
      dist: {
        files: [{
          expand: true,
          cwd: 'www',
          src: ['scss/*.scss'],
          flatten: true,
          dest: 'www/content/stylesheets',
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
        src: 'www/scss/*.scss'
      }
    },
    browserSync: {
      dev: {
        bsFiles: {
          src: [
            'www/output/**'
          ]
        },
        options: {
          server: {
            baseDir: './www/output'
          },
          watchTask: true,
          injectChanges: false
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-webpack');

  require('load-grunt-tasks')(grunt);

  grunt.registerTask('default', ['sass', 'autoprefixer', 'webpack', 'shell', 'browserSync', 'watch']);

};
