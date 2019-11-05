<?php
/**
 * ItChAsset.php
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
 * @class \p2m\assets\locale\ItChAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ItChAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ItChAsset',
 */

namespace p2m\assets\locale;

class ItChAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'it-ch.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-3Ae/24Vl20ZaFIVao4sQ2oZY6O8hu9vpRKAeUXKiHQIV0DEPv4SA62/PdEhQeOG7',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'it-ch.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}