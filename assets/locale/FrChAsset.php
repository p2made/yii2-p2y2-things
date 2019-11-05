<?php
/**
 * FrChAsset.php
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
 * @class \p2m\assets\locale\FrChAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\FrChAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\FrChAsset',
 */

namespace p2m\assets\locale;

class FrChAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'fr-ch.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-pnDHWYsi18JsCk/VlTWYKMIHP7HWGnFq7ZELO6MRs1JKMutYK21fRxhZWietsWyJ',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'fr-ch.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
