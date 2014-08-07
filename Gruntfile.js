module.exports = function(grunt) {

  // 1. All configuration goes here 
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {   
      dist: {
        src: [
          'js/dev/libs/*.js', // All JS in the libs folder
          'js/dev/main.js'  // This specific file
        ],
        dest: 'js/dev/allthejs.js',
      }
    },

    uglify: {
      build: {
          src: 'js/dev/allthejs.js',
          dest: 'js/main.min.js'
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'images/dev',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'images/'
        }]
      }
    },

    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'css/style.css': 'css/dev/style.scss',
          'css/critical.css' : 'css/dev/critical.scss'
        }
      } 
    },

    autoprefixer: {
      dist: {
        files: {
          'css/style.css' : 'css/style.css',
          'css/critical.css' : 'css/critical.css'
        }
      }
    },

    // Remove unused CSS across multiple files
    uncss: {
      dist: {
        files: {
          'css/style-uncss.css': ['index.html', 'project-brs.html']
        }
      }
    },

    penthouse : {
      extract : {
        outfile : 'tmp/out.css',
        css : './css/style.css', 
        url : 'http://localhost:8000',
        width: 639,
        height: 1136
      },
    },

    // minify css
    cssmin: {
      css:{
        src: 'css/style-uncss.css',
        dest: 'css/style-uncss.min.css'
      }
    },

    watch: {
      options: {
        livereload: true,
      },
      scripts: {
        files: ['js/*/*.js'],
        tasks: ['concat', 'uglify'],
        //tasks: ['concat'],
        options: {
          spawn: false,
        },
      },
      css: {
        files: ['css/dev/*.scss'],
        tasks: ['sass', 'autoprefixer'],
        options: {
          spawn: false,

        }
      },
      // images: {
      //   files: ['images/**/*.{png,jpg,gif}', 'images/*.{png,jpg,gif}'],
      //   tasks: ['imagemin'],
      //   options: {
      //     spawn: false,
      //   }
      // },
    },

    connect: {
      server: {
        options: {
          port: 8000,
          base: './'
        }
      }
    },

  });

  // 3. Where we tell Grunt which plugins we want to use
  // use matchdep for this
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  // 4. Where we tell Grunt what to do when we type "grunt" and "grunt dev" into the terminal.
  grunt.registerTask('default', ['concat', 'uglify', 'sass', 'imagemin']);

  grunt.registerTask('dev', ['connect', 'watch']);

};