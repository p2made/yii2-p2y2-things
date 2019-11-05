<?php
/**
 * ArAsset.php
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
 * @class \p2m\assets\locale\ArAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ArAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ArAsset',
 */

namespace p2m\assets\locale;

class ArAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ar.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-hecVAeJg1hdTtBjqTP5JN3H4DpjxRleLxFXxcFvLCmO7Ssp1qH/1+K5HMO1G5rGA',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ar.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
