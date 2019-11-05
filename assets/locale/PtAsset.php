<?php
/**
 * PtAsset.php
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
 * @class \p2m\assets\locale\PtAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\PtAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\PtAsset',
 */

namespace p2m\assets\locale;

class PtAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'pt.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-9mi2cYBhndrwfMC3PCWU3R4jfZujphHUGQdXbeBl6MakBKwLj6hrH+XU01gSYlAN',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'pt.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
