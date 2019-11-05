<?php
/**
 * BsAsset.php
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
 * @class \p2m\assets\locale\BsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\BsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\BsAsset',
 */

namespace p2m\assets\locale;

class BsAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'bs.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-1x4WaPwbnf7iy4t6TaDS6xWOpoz2Xh5T66JLrgQzYusjwlTRft4mBlgmql2lDuEs',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'bs.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}