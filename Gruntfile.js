/*!
 * Grunt file
 *
 * @package Thanks
 */

'use strict';

module.exports = function ( grunt ) {
	const conf = grunt.file.readJSON( 'extension.json' );

	grunt.loadNpmTasks( 'grunt-banana-checker' );

	grunt.initConfig( {
		banana: conf.MessagesDirs,
	} );

	grunt.registerTask( 'test', [ 'banana' ] );
	grunt.registerTask( 'default', 'test' );
};
