<?php
/**
 * EsDoAsset.php
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
 * @class \p2m\assets\locale\EsDoAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\EsDoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\EsDoAsset',
 */

namespace p2m\assets\locale;

class EsDoAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'es-do.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-NtcMz99sXYcdh/ghU8Xq0G5TgZ16Km9XZYA4Ep3SOI+ZmpD6Yq3YDeWcD5kyczDM',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'es-do.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
