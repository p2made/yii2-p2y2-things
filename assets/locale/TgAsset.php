<?php
/**
 * TgAsset.php
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
 * @class \p2m\assets\locale\TgAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\TgAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\TgAsset',
 */

namespace p2m\assets\locale;

class TgAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'tg.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-xyHnTGqGLZqAWc7kjLQBRyQLwSYsTLzEB00uOeg/DtKFi0osXJPmWZh20ApfEfYn',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'tg.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
