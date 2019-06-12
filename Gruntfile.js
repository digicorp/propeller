// Gruntfile.js
// our wrapper function (required by grunt and its plugins)
// all configuration goes inside this function
module.exports = function (grunt) {

  // ===========================================================================
  // CONFIGURE GRUNT ===========================================================
  // ===========================================================================
  grunt.initConfig({

    // get the configuration info from package.json ----------------------------
    // this way we can use things like name and version (pkg.grunt_name)
    pkg: grunt.file.readJSON('package.json'),

    banner: '/*!\n' +
      ' * Propeller v<%= pkg.version %> (<%= pkg.homepage %>)\n' +
      ' * Copyright 2016-<%= grunt.template.today("yyyy") %> <%= pkg.author %>\n' +
      ' * Licensed under MIT (http://propeller.in/LICENSE)\n' +
      ' */\n',

    // Task configuration.
    clean: {
      options: { force: true },
      dist: { 'src': 'dist/*' },
      archive: 'archive',
      assets: ['assets/css/propeller.css', 'assets/css/propeller.min.css', 'assets/js/propeller.js', 'assets/js/propeller.min.js'],
    },
    concat: {
      options: {
        stripBanners: false
      },
      propellerJs: {
        src: [
          'components/global/js/global.js',
          'components/textfield/js/textfield.js',
          'components/checkbox/js/checkbox.js',
          'components/radio/js/radio.js',
          'components/button/js/ripple-effect.js',
          'components/dropdown/js/dropdown.js',
          'components/accordion/js/accordion.js',
          'components/alert/js/alert.js',
          'components/popover/js/popover.js',
          'components/tab/js/tab-scrollable.js',
          'components/sidebar/js/sidebar.js'
        ],
        dest: 'dist/js/<%= pkg.grunt_name %>.js'
      }
    },
    jshint: {
      options: {
        jshintrc: 'grunt/.jshintrc'
      },
      core: {
        src: '<%= concat.propellerJs.dest %>',
      }
    },
    babel: {
      options: {
        sourceMap: true,
        presets: ['babel-preset-es2015']
      },
      dist: {
        files: {
          '<%= concat.propellerJs.dest %>': '<%= concat.propellerJs.dest %>'
        }
      }
    },
    uglify: {
      propellerMinJs: {
        options: {
          banner: '<%= banner %>',
          compress: {
            warnings: false
          },
          mangle: true,
          preserveComments: 'some'
        },
        src: '<%= concat.propellerJs.dest %>',
        dest: 'dist/js/<%= pkg.grunt_name %>.min.js'

      }
    },
    sass: {
			options: {
				sourceMap: true,
				outputStyle: 'expanded'
			},
			dist: {
				files: [
					{
						expand: true, // Recursive
						cwd: 'scss/', // The startup directory
						src: '**/*.scss', // Source files
						dest: 'dist/css/',
						ext: ".css" // File extension 
					},
					{
						expand: true, // Recursive
						cwd: 'components/', // The startup directory
						src: '**/*.scss', // Source files
						dest: 'components/',
						ext: ".css" // File extension 
					}
				]
			}
		},
    cssmin: {
      options: {
        compatibility: 'ie8',
        keepSpecialComments: 0,
        sourceMap: true,
        advanced: false
      },
      propellerMinCss: {
        src: 'dist/css/propeller.css',
        dest: 'dist/css/<%= pkg.grunt_name %>.min.css'
      }
    },
		copy: {
			fonts: {
				expand: true,
				cwd: 'assets/fonts/',
				src: '**',
				dest: 'dist/fonts/'
			},
			cssjs: {
				expand: true,
				cwd: 'dist/',
				src: ['**', '!fonts/**'],
				dest: 'assets/'
			}
		},
    autoprefixer: {
      options: {
        browsers: ['last 2 versions', 'ie 9']
      },
      dist: {
        files: {
          'dist/css/propeller.css': 'dist/css/propeller.css',
          'dist/css/propeller.min.css': 'dist/css/propeller.min.css'
        }
      }
    },
    csslint: {
      options: {
        csslintrc: 'grunt/.csslintrc'
      },
      strict: {
        options: {
          import: false
        },
        src: ['dist/css/propeller.css']
      }
    },
    watch: {
      styles: {
        files: ['scss/**/*.scss', 'components/**/*.scss', 'Gruntfile.js', '<%= concat.propellerJs.src %>'],
				tasks: ['clean', 'concat', 'babel', 'uglify', 'sass', 'cssmin', 'copy', 'autoprefixer']
      }
    },
    stamp: {
      yourTarget: {
        options: {
          banner: '<%= banner %>',
        },
        files: {
          src: '<%= cssmin.propellerMinCss.dest %>'
        }
      }
    },
    csscomb: {
      options: {
        config: 'grunt/.csscomb.json'
      },
      dist: {
        expand: true,
        cwd: 'dist/css/',
        src: ['*.css', '!*.min.css'],
        dest: 'dist/css/'
      }
    },
    compress: {
      distzip: {
        options: {
          archive: 'archive/pmd-<%= pkg.version %>-dist.zip',
          mode: 'zip',
          level: 9,
          pretty: true
        },
        files: [
          {
            expand: true,
            cwd: 'dist/',
            src: ['**'],
            dest: 'pmd-<%= pkg.version %>-dist'
          }
        ]
      },
      main: {
        options: {
          archive: 'archive/pmd-<%= pkg.version %>.zip',
          mode: 'zip',
          level: 9,
          pretty: true
        },
        files: [
          {
            expand: true,
            src: [
              'components/**/*',
              'scss/**/*',
              '!components/*/snippets/**',
              '!components/index.php',
              'assets/**/*',
              '!assets/landing-page/**',
              'dist/**/*',
              'templates/admin-dashboard/**/*'
            ],
            dest: '/'
          }
        ]
      }
    },
  });

  // Project configuration.
  grunt.util.linefeed = '\n';

  // ===========================================================================
  // LOAD GRUNT PLUGINS ========================================================
  // ===========================================================================
  // we can only load these if they are in our package.json
  // make sure you have run npm install so our app can find these

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks("grunt-jscs");
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-csslint');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-concat-css');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-csscomb');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.loadNpmTasks('grunt-stripcomments');
  grunt.loadNpmTasks('grunt-babel');
  grunt.loadNpmTasks('grunt-processhtml');
  grunt.loadNpmTasks('grunt-stamp');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // this default task will go through all configuration (dev and production) in each task 
  grunt.registerTask('default', ['clean', 'concat', 'uglify', 'sass', 'cssmin', 'copy', 'autoprefixer', 'csslint', 'csscomb', 'stamp', 'compress']);

  grunt.registerTask('dev', ['watch']);

};
