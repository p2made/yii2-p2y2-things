<?php
/**
 * SwAsset.php
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
 * @class \p2m\assets\locale\SwAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\SwAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\SwAsset',
 */

namespace p2m\assets\locale;

class SwAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'sw.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-1gAiG4kA/IPLr1LhrEsRoQNCuhk6l8MNZBvNq6+Y2LCXU0kWYeRp3uvsYJ3X21If',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'sw.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
