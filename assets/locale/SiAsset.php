<?php
/**
 * SiAsset.php
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
 * @class \p2m\assets\locale\SiAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\SiAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\SiAsset',
 */

namespace p2m\assets\locale;

class SiAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'si.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-IZem1aKQmvfCMkTABrwawgNfkiT7FcnwcnuJ9huxqR1VO/BcGuWJbv+uhr0EHkgo',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'si.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
