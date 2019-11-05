<?php
/**
 * KoAsset.php
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
 * @class \p2m\assets\locale\KoAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\KoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\KoAsset',
 */

namespace p2m\assets\locale;

class KoAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ko.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-GIFxlwltdo6jImYiwF+n6nbQ6sxi5/6oKDIRD4lIvf3RyC6Yc3qLfrTS3YVMol1+',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ko.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
