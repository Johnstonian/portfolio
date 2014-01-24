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
        dest: 'js/dev/main.js',
      }
    },

    uglify: {
      build: {
          src: 'js/dev/main.js',
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
          'css/style.css': 'css/dev/style.scss'
        }
      } 
    },

    autoprefixer: {
      dist: {
        files: {
          'css/style.css': 'css/style.css'
        }
      }
    },

    watch: {
      options: {
        livereload: true,
      },
      scripts: {
        files: ['js/*/*.js'],
        tasks: ['concat', 'uglify'],
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
      images: {
        files: ['images/**/*.{png,jpg,gif}', 'images/*.{png,jpg,gif}'],
        tasks: ['imagemin'],
        options: {
          spawn: false,
        }
      },
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

  // 3. Where we tell Grunt we plan to use this plug-in.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-connect');

  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask('default', ['concat', 'uglify', 'sass', 'imagemin']);

  grunt.registerTask('dev', ['connect', 'watch']);

};