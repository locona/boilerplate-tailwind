<?php
/**
 * Twigpack plugin for Craft CMS 3.x
 *
 * Twigpack is the conduit between Twig and webpack, with manifest.json &
 * webpack-dev-server HMR support
 *
 * @link      https://nystudio107.com/
 * @copyright Copyright (c) 2018 nystudio107
 */

/**
 * Twigpack config.php
 *
 * This file exists only as a template for the Twigpack settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'twigpack.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [
	// Global settings
	'*' => [
		// If `devMode` is on, use webpack-dev-server to all for HMR (hot module reloading)
		'useDevServer' => false,
		// Enforce Absolute URLs on includes
		'useAbsoluteUrl' => true,
		// The JavaScript entry from the manifest.json to inject on Twig error pages
		// This can be a string or an array of strings
		'errorEntry' => '',
		// String to be appended to the cache key
		'cacheKeySuffix' => '',
		// Manifest file names
		'manifest' => [
			'legacy' => 'mix-manifest.json',
			'modern' => 'mix-manifest.json',
		],
		// Public server config
		'server' => [
			'manifestPath' => '@webroot/assets/',
			'publicPath' => '/assets/',
		],
		// webpack-dev-server config
		'devServer' => [
			'manifestPath' => '@webroot/assets/',
			'publicPath' => '/assets/',
		],
		// Bundle to use with the webpack-dev-server
		'devServerBuildType' => 'modern',
		// Whether to include a Content Security Policy "nonce" for inline
		// CSS or JavaScript. Valid values are 'header' or 'tag' for how the CSP
		// should be included. c.f.:
		// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/script-src#Unsafe_inline_script
		'cspNonce' => '',
		// Local files config
		'localFiles' => [
			'basePath' => '@webroot/',
			'criticalPrefix' => '/dist/criticalcss/',
			'criticalSuffix' => '_critical.min.css',
		],
	],
];
