<?php
/**
 * FiAsset.php
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
 * @class \p2m\assets\locale\FiAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\FiAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\FiAsset',
 */

namespace p2m\assets\locale;

class FiAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'fi.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-O3zzL84u+okCvgxs2xxJzoEuZC0sNYn/P92VdhJhADbPuYNx9CzbT/KQ8muIOeYg',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'fi.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
