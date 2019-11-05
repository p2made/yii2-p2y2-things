<?php
/**
 * SkAsset.php
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
 * @class \p2m\assets\locale\SkAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\SkAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\SkAsset',
 */

namespace p2m\assets\locale;

class SkAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'sk.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-3Xlj8CvaOa9yy8vAmBh3YM12Y3p6srimBRm9/nI6hMHgzzg950anfV2c8axgjLjp',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'sk.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
