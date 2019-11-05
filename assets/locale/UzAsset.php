<?php
/**
 * UzAsset.php
 *
 * Yii2 asset for 
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\locale\UzAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\UzAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\UzAsset',
 */

namespace p2m\assets\locale;

class UzAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'uz.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-TIKUry4Oqs3ijer5v0X1Jsmjowth0tQU7KBa9CS3K4zCDBhvsEc3yZDO7psUWhGo',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'uz.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
