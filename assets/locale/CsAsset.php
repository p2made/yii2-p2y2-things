<?php
/**
 * CsAsset.php
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
 * @class \p2m\assets\locale\CsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\CsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\CsAsset',
 */

namespace p2m\assets\locale;

class CsAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'cs.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-+kucl+Uluan4CpizG7eBtjnqyT9Wt2xcnLyBXwwtxx+ytiURuKJ9cn9JUCNjynyb',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'cs.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
