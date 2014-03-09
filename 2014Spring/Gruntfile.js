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


  grunt.registerTask('build', ['compass']);
  grunt.registerTask('default', ['build','watch']);
}