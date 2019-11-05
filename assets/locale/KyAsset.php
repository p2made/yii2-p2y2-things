<?php
/**
 * KyAsset.php
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
 * @class \p2m\assets\locale\KyAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\KyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\KyAsset',
 */

namespace p2m\assets\locale;

class KyAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'ky.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-4WTBg+b44jB/CN7n6dAUU9dRpKWskTVhJF4x8JLDsyv/LZzhA7AW1nASqv0BvYAO',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ky.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
