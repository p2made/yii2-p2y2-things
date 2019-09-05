<?php
/**
 * _assetsData.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2AssetBundle
 */

return [
	// Pattern for Cdnjs assets
	'assetName' => [
		'pattern' => 'cdnjs',
		'package' => 'package', // when needed
		'version' => '0.0.0',
		'sourcePath' => 'sourcePath',
		'static' => [
			'css' => [
				'asset.min.css'
			],
			'js' => [
				'asset.min.js'
			],
			'cssOptions' => [
				'cssOptions'
			],
			'jsOptions' => [
				'jsOptions'
			],
			'publishOptions' => [
				'publishOptions'
			],
		],
		'published' => [
			'css' => [
				'asset.min.css'
			],
			'js' => [
				'asset.min.js'
			],
			'cssOptions' => [
				'cssOptions'
			],
			'jsOptions' => [
				'jsOptions'
			],
			'publishOptions' => [
				'publishOptions'
			],
		],
		'css' => [
			'asset.min.css'
		],
		'js' => [
			'asset.min.js'
		],
		'cssOptions' => [
			'cssOptions'
		],
		'jsOptions' => [
			'jsOptions'
		],
		'publishOptions' => [
			'publishOptions'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // Cdnjs
	// Pattern for NPM/Unpkg assets
	'assetName' => [
		'pattern' => 'unpkg',
		'package' => 'package', // when needed
		'version' => '0.0.0',
		'path' => 'path',
		'css' => [
			'asset.min.css'
		],
		'js' => [
			'asset.min.js'
		],
		'cssOptions' => [
			'cssOptions'
		],
		'jsOptions' => [
			'jsOptions'
		],
		'publishOptions' => [
			'publishOptions'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	// Pattern for ../vendor assets
	'assetName' => [
		'pattern' => 'vendor',
		'package' => 'package', // when needed
		'sourcePath' => '@p2m/yii2-p2y2-things/vendor/...',
		'css' => [
			'asset.min.css'
		],
		'js' => [
			'asset.min.js'
		],
		'cssOptions' => [
			'cssOptions'
		],
		'jsOptions' => [
			'jsOptions'
		],
		'publishOptions' => [
			'publishOptions'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // ../vendor
	// jQuery pattern
	'assetName' => [
		'pattern' => 'jquery',
		'package' => 'jquery', // when needed
		'version' => '0.0.0',
		'baseUrl' => 'https://code.jquery.com',
		'sourcePath' => '@npm/jquery/dist',
		'static' => [
			'js' => [
				'asset.min.js'
			],
			'jsOptions' => [
				'jsOptions'
			],
		],
		'published' => [
			'js' => [
				'asset.min.js'
			],
		],
	], // jQuery
	// Default pattern
	'assetName' => [
		'pattern' => 'default',
		'package' => 'package', // when needed
		'version' => '0.0.0',
		'baseUrl' => 'baseUrl',
		'sourcePath' => 'sourcePath',
		'static' => [
			'css' => [
				'asset.min.css'
			],
			'js' => [
				'asset.min.js'
			],
			'cssOptions' => [
				'cssOptions'
			],
			'jsOptions' => [
				'jsOptions'
			],
			'publishOptions' => [
				'publishOptions'
			],
		],
		'published' => [
			'css' => [
				'asset.min.css'
			],
			'js' => [
				'asset.min.js'
			],
			'cssOptions' => [
				'cssOptions'
			],
			'jsOptions' => [
				'jsOptions'
			],
			'publishOptions' => [
				'publishOptions'
			],
		],
		'css' => [
			'asset.min.css'
		],
		'js' => [
			'asset.min.js'
		],
		'cssOptions' => [
			'cssOptions'
		],
		'jsOptions' => [
			'jsOptions'
		],
		'publishOptions' => [
			'publishOptions'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // Default
];
