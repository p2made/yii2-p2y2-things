<?php
/**
 * KaAsset.php
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
 * @class \p2m\assets\locale\KaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\KaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\KaAsset',
 */

namespace p2m\assets\locale;

class KaAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'ka.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-tCvVLPUGxS8ZWlyNIBGoxUz28ZPx8Yke8Ww9fy1ldLF5hbW8iVdLpFSu+SfTZKeM',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ka.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
