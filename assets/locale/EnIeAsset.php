<?php
/**
 * EnIeAsset.php
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
 * @class \p2m\assets\locale\EnIeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\EnIeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\EnIeAsset',
 */

namespace p2m\assets\locale;

class EnIeAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'en-ie.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-G2YBpYiCgtEDhCRCr4CfbCTxRy9lyUVOEXGkjckwdns+VY2hvZMkDzou9Ev4ZU4g',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'en-ie.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
