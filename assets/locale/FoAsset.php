<?php
/**
 * FoAsset.php
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
 * @class \p2m\assets\locale\FoAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\FoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\FoAsset',
 */

namespace p2m\assets\locale;

class FoAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'fo.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-pMdrWRjteVBNiKXYeupxGT4f05s7ZZkIrYdG7lKH6VbPhv6X6hRcBq+HRB/JdpjJ',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'fo.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
