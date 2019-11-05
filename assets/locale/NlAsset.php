<?php
/**
 * NlAsset.php
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
 * @class \p2m\assets\locale\NlAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\NlAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\NlAsset',
 */

namespace p2m\assets\locale;

class NlAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'nl.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-A+2nDIC4M+umioIYsDOMZ6ZEFk4C8SOaiFTd6AdcPyRORVuPkIuKJQtYlsV3hQXO',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'nl.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
