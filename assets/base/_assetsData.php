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
	'animate.css' => [
		'version' => '3.7.2',
		'css' => [
			'animate.min.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'chart.js' => [
		'version' => '2.8.0',
		'assetPath' => 'dist',
		'css' => [
			'Chart.min.css'
		],
		'js' => [
			'Chart.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'flag-icon-css' => [
		'version' => '2.8.0',
		'css' => [
			'css/flag-icon.min.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'jszip' => [
		'version' => '3.2.2',
		'assetPath' => 'dist',
		'js' => [
			'jszip.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'scrollreveal' => [
		'version' => '3.3.4',
		'assetPath' => 'dist',
		'js' => [
			'scrollreveal.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'simple-line-icons' => [
		'version' => '0.0.0',
		'css' => [
			'asset.min.css'
		],
		'js' => [
			'asset.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'sweetalert' => [
		'version' => '0.0.0',
		'css' => [
			'asset.min.css'
		],
		'js' => [
			'asset.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
];
