<?php
/**
 * MomentWithLocalesAsset.php
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
 * @class \p2m\assets\MomentWithLocalesAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentWithLocalesAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentWithLocalesAsset',
 */

namespace p2m\assets;

class MomentWithLocalesAsset extends \p2m\assets\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/min',
			'js' => [
				'moment-with-locales.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-5wvDEKtdpg/AAUpUHtcjYKVs1qv2V/UFPCN2FNvgePyaKmpBjW+LrboDEuS5ssBe',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/min',
			'js' => [
				'moment-with-locales.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];
}
