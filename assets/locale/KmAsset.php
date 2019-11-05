<?php
/**
 * KmAsset.php
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
 * @class \p2m\assets\locale\KmAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\KmAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\KmAsset',
 */

namespace p2m\assets\locale;

class KmAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'km.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-Fwhfd6+mvFr8h9BuBGYiBN+mqTAKIVLHg8nUpq/6LhvDYcyHmq8SsOHRRREoNBbw',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'km.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
