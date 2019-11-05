<?php
/**
 * MkAsset.php
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
 * @class \p2m\assets\locale\MkAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\MkAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\MkAsset',
 */

namespace p2m\assets\locale;

class MkAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'mk.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-Txbj1sYTt5siG5JKyrBKLYl05den+E3oCpNf+W4RlsK+KEhrZgjgADNtDaVDShle',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'mk.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
