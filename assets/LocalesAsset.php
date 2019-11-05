<?php
/**
 * LocalesAsset.php
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
 * @class \p2m\assets\LocalesAsset
 */

/**
 * Load this asset with...
 * p2m\assets\LocalesAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\LocalesAsset',
 */

namespace p2m\assets;

class LocalesAsset extends \p2m\assets\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/min',
			'js' => [
				'locales.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-Th5ix0y20cxlUhRdFrnCCGiZplc1oA7FkdxpcxQGH12t9zK2+a0ezQHvn6/EF/Mg',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/min',
			'js' => [
				'locales.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];
}
