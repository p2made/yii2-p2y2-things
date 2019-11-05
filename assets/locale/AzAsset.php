<?php
/**
 * AzAsset.php
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
 * @class \p2m\assets\locale\AzAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\AzAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\AzAsset',
 */

namespace p2m\assets\locale;

class AzAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'az.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-ibxogc1LBwstySFVrwTcvSQOYwIOXKI6dnYop7UJEXHO7Fs9l7U/oty7twNtqITr',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'az.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
