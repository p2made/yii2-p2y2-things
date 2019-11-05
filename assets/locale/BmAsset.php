<?php
/**
 * BmAsset.php
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
 * @class \p2m\assets\locale\BmAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\BmAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\BmAsset',
 */

namespace p2m\assets\locale;

class BmAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'bm.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-oXbYec6XT1TvYZ01L6uqyrxAcnqrTs3wcI72KNiIgmwgocJdUxSWD2vBd1ovfttY',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'bm.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}