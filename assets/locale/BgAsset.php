<?php
/**
 * BgAsset.php
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
 * @class \p2m\assets\locale\BgAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\BgAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\BgAsset',
 */

namespace p2m\assets\locale;

class BgAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'bg.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-qfz7Lb2BKZ/5gB9t8QnEfS2J/tzGWqmw2kTqMatIV7sd48z11zsO6qM4UspT6nSo',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'bg.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
