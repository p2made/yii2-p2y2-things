<?php
/**
 * JaAsset.php
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
 * @class \p2m\assets\locale\JaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\JaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\JaAsset',
 */

namespace p2m\assets\locale;

class JaAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ja.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-oXDUAIMbbXBRmwoB+RqFKdyIHd5ny4sLABYrB/XrW8DcFdtns6K52DZRXvG8lpw1',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ja.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
