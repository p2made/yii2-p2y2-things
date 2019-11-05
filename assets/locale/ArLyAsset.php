<?php
/**
 * ArLyAsset.php
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
 * @class \p2m\assets\locale\ArLyAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ArLyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ArLyAsset',
 */

namespace p2m\assets\locale;

class ArLyAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'ar-ly.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-U0af6ngdzkIN5uiRSoLQuEbz6VfECnXQdoXb/KuYgB5ArWL318nINLEWl7yMPUGj',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ar-ly.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
