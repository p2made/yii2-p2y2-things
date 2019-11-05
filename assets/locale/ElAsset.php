<?php
/**
 * ElAsset.php
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
 * @class \p2m\assets\locale\ElAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ElAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ElAsset',
 */

namespace p2m\assets\locale;

class ElAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'el.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-RFLiRGsvc/5HiQ02gg1yLNr0Y3Jg+jENSFDXz/JWKPztGKv2CQ+Ib8b55rboiDoA',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'el.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
