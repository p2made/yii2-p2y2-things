<?php
/**
 * EsUsAsset.php
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
 * @class \p2m\assets\locale\EsUsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\EsUsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\EsUsAsset',
 */

namespace p2m\assets\locale;

class EsUsAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'es-us.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-LxPYoo2MDLHLonLrBjD1QCbvaq+omMMZzq6hQGhirIctcLO2PvOqLp7yuhotg2lN',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'es-us.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
