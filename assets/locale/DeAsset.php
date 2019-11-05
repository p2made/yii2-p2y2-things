<?php
/**
 * DeAsset.php
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
 * @class \p2m\assets\locale\DeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\DeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\DeAsset',
 */

namespace p2m\assets\locale;

class DeAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'de.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-u4vVudBaVphJuXJ5BskWwV2AvgqjVmlTn09LZ2TAABA7UBHbGTp88ZK0/ZHkyAnX',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'de.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}