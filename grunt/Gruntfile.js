module.exports = function (grunt) {
	
grunt.initConfig({  
 
	csso: {
	  compress: {
		options: {
		  report: 'gzip'
		},
		files: {
		  'prod/css/style.min.css': ['libs/bootstrap-material-design/dist/css/ripples.css', 'dev/css/style.css']
		}
	  }
	},

	autoprefixer: {
		single_file: {
			src: 'prod/css/style.min.css',
			dest: 'prod/css/style.min.css'
		}  
	},

	jshint: {
		options: {jshintrc: true},
		all: 'dev/js/common.js'
	},

	uglify: {
	  my_target: {
		files: {
			'prod/js/scripts.min.js': ['dev/libs/jquery/dist/jquery.min.js', 'dev/libs/bootstrap-sass/assets/javascripts/bootstrap.js', 'dev/libs/bootstrap-material/js/material.min.js', 'dev/libs/bootstrap-material/js/ripples.min.js', 'dev/js/inputmask.js', 'dev/js/slippry.js', 'dev/js/jquery.*.js', 'dev/helpers/jquery.fancybox-thumbs.js', 'dev/js/common.js']
		}
	  }
	},

	fixmyjs: {
		options: {
		  config: 'dev/.jshintrc', 
		  indentpref: 'spaces'
		},
		test: {
		  files: [
			{src: ['dev/js/common.js'], dest: 'dev/js/common.js', ext: '.js'}
		  ]
		}
	},

	copy: {
		main: {files: [{expand: true, cwd: 'dev/', src: ['**/*.php', '!config.php', '.htaccess','img/*.svg'], dest: 'prod/'},
				{expand: true, cwd: 'dev/libs/**/fonts', src: ['**'], dest: 'prod/fonts'}]
		}
	},

	htmlmin: {
	  dist: {
		options: {
			removeComments: true,
			collapseWhitespace: true
		  },
		files: [{                                   
			expand: true,
			cwd: 'prod/',
			src: ['**/*.php', '*.php', '!config.php', '!**/var.php', '!var.php','**/*.svg', '!email.php'],
			dest: 'prod/'     
		}]
	  }
	},

	watch: {
		html: {
			files: ['*.html','*/*.html', '!dist/*.html', '!release/*.html'],
			tasks: ['includereplace', 'processhtml']
		},
		css: {
			files: ['css/*.css'],
			tasks: ['cssmin']
		}
	},

	processhtml: {
	  dev:{
		options: {
			process: true,
		},
		files: [{
			expand: true,     
			cwd: 'dev/',   
			src: ['blocks/meta.php', 'blocks/footer.php'],
			dest: 'prod/'  
		}]
	  }  
	},

	wiredep: {
	  task: {
		src: ['dev/blocks/meta.php'],
		options: {}
	  }
	},

	critical: {
		test: {
			options: {
				base: './',
				css: ['prod/css/style.min.css'],
				width: 1600,
				height: 1500
			},
			files: [{                                   
				expand: true,
				cwd: 'prod/',
				src: ['index.html'],
				dest: 'prod/'
			}]
		}
	},

	imagemin: {
		dynamic: {
		  files: [{
			expand: true,
			cwd: 'dev/',
			src: ['**/*.{png,jpg,gif,JPG}','!libs/*.{png,jpg,gif,JPG}'],
			dest: 'prod/'
		  }]
		}
	},
	postcss: {
      options: {
        processors: [
          
          require('cssgrace'),
        ]
      },
      dist: {
        src: ['prod/css/style.min.css'],
        dest: 'prod/css/style.min.css'
      }
    }
	

});

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-include-replace');
    grunt.loadNpmTasks('grunt-processhtml');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-csso');
    grunt.loadNpmTasks('grunt-wiredep');
    grunt.loadNpmTasks('grunt-critical');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-fixmyjs');
    grunt.loadNpmTasks('grunt-uncss');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-csslint');
    
    grunt.registerTask('default', ['copy', 'processhtml', 'htmlmin']);
    grunt.registerTask('all', ['csso', 'autoprefixer','uglify','copy', 'processhtml', 'htmlmin','imagemin']);
    grunt.registerTask('css', ['csso', 'autoprefixer']);
	grunt.registerTask('js', ['uglify']);
	grunt.registerTask('php', ['copy', 'processhtml', 'htmlmin']);
    grunt.registerTask('img', ['imagemin']);
	  
};