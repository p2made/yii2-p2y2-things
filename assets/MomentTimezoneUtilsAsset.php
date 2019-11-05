<?php
/**
 * MomentTimezoneUtilsAsset.php
 *
 * Yii2 asset for 
 * https://momentjs.com/timezone/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\MomentTimezoneUtilsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentTimezoneUtilsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentTimezoneUtilsAsset',
 */

namespace p2m\assets;

class MomentTimezoneUtilsAsset extends \p2m\assets\base\MomentTimezoneAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment-timezone@##version##',
			'js' => [
				'moment-timezone-utils.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-WKCLdIJh3AujBxVTkM6YAV2GMVItjysaOvxtSi0bUtT1juCA4SOkVfOsZj6mrvJq',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment-timezone',
			'js' => [
				'moment-timezone-utils.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];
}
