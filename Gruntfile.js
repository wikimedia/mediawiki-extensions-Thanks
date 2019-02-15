/*!
 * Grunt file
 *
 * @package Thanks
 */

/* eslint-env node, es6 */
module.exports = function ( grunt ) {
	var conf = grunt.file.readJSON( 'extension.json' );

	grunt.loadNpmTasks( 'grunt-banana-checker' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.loadNpmTasks( 'grunt-eslint' );
	grunt.loadNpmTasks( 'grunt-jsonlint' );
	grunt.loadNpmTasks( 'grunt-stylelint' );

	grunt.initConfig( {
		eslint: {
			all: [
				'*.js',
				'modules/**/*.js',
				'tests/qunit/**/*.js'
			]
		},
		banana: conf.MessagesDirs,
		stylelint: {
			all: [
				'**/*.css',
				'!node_modules/**',
				'!vendor/**'
			]
		},
		watch: {
			files: [
				'.eslintrc.json',
				'<%= eslint.all %>'
			],
			tasks: 'test'
		},
		jsonlint: {
			all: [
				'*.json',
				'i18n/*.json'
			]
		}
	} );

	grunt.registerTask( 'test', [ 'eslint', 'stylelint', 'jsonlint', 'banana' ] );
	grunt.registerTask( 'default', 'test' );
};
