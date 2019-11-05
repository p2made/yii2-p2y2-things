<?php
/**
 * RoAsset.php
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
 * @class \p2m\assets\locale\RoAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\RoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\RoAsset',
 */

namespace p2m\assets\locale;

class RoAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ro.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-CH+YBj4BjKmtGQbcS49oXGbH60zzLPW1058VKCYtO5e8aXYRLgMQ9WKpi0GA+A4z',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ro.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
