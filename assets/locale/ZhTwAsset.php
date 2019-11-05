<?php
/**
 * ZhTwAsset.php
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
 * @class \p2m\assets\locale\ZhTwAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ZhTwAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ZhTwAsset',
 */

namespace p2m\assets\locale;

class ZhTwAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'zh-tw.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-gcGlYg3BhaYDyeLleIYE7cX6QqCinHEq1apqporIAa0Wt+7NEFBeEz9s1C/vPDMb',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'zh-tw.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
