<?php
/**
 * MlAsset.php
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
 * @class \p2m\assets\locale\MlAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\MlAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\MlAsset',
 */

namespace p2m\assets\locale;

class MlAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ml.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-UeDyq/FJmK7hSm4PxYnpzA3ZWwxjaqBAFeKAY4yavs0x6jWpbalvgdQpXL8MnGot',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ml.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
