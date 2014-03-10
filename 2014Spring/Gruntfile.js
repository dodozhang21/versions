module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    compass: {
		dist: {
			options: {
				config: 'config.rb'
			}
		}
    },
	cssmin: {
	  minify: {
		expand: true,
		cwd: 'css/',
		src: ['*.css', '!*.min.css'],
		dest: 'css/'
//		ext: '.css'
	  }
	},
    watch: {
      grunt: { files: ['Gruntfile.js'] },

      compass: {
        files: '**/*.scss',
        tasks: ['compass'],
		options: {
		  livereload: true,
		}
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');


  grunt.registerTask('build', ['compass', 'cssmin']);
  grunt.registerTask('default', ['build','watch']);
}