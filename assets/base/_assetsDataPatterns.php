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
	'assetName' => [
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
	],
];
