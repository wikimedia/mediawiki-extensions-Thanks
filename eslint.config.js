'use strict';

const { defineConfig, globalIgnores } = require( 'eslint/config' );
const wikimedia = require( 'eslint-config-wikimedia/flat' );

// Directories with their own config, which other configs don't apply to.
// These were directories with `"root": true` in .eslintrc.json.
const rootDirs = {
	modules: [ 'modules/**' ],
	tests: [ 'tests/qunit/**' ],
};

// Shared by modules and tests (was modules/.eslintrc.json)
const modulesConfig = {
	languageOptions: {
		globals: {
			// From `env: { commonjs: true }`
			global: 'readonly',
		},
	},
	rules: {
		'max-len': 'off',
		'no-jquery/no-global-selector': 'off',
	},
};

module.exports = defineConfig( [
	globalIgnores( [
		// Build
		'vendor/',
		'docs/',

		// Language files written automatically by TranslateWiki
		'**/i18n/**/*.json',
		'!**/i18n/**/en.json',
		'!**/i18n/**/qqq.json',
	] ),

	// Gruntfile.js, etc.
	{
		ignores: Object.values( rootDirs ).flat(),
		extends: [ wikimedia( 'server' ) ],
	},
	{
		files: [ '**/*.js' ],
		ignores: Object.values( rootDirs ).flat(),
		rules: {
			'comma-dangle': [ 'error', 'always-multiline' ],
		},
	},

	// Code which runs in MediaWiki
	{
		files: rootDirs.modules,
		extends: [ wikimedia( 'client', 'jquery', 'mediawiki' ), modulesConfig ],
	},

	// QUnit tests
	{
		files: rootDirs.tests,
		extends: [ wikimedia( 'client', 'jquery', 'mediawiki', 'qunit' ), modulesConfig ],
	},
] );
