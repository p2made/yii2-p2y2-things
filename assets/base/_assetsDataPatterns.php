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
];
