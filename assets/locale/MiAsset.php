<?php
/**
 * MiAsset.php
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
 * @class \p2m\assets\locale\MiAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\MiAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\MiAsset',
 */

namespace p2m\assets\locale;

class MiAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'mi.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-YLs25rVeS7Dmipv5bYijMq/ke4C1bSv6iBSXS7uwpB0B2h7JlwTXx+qwcr9zSVC5',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'mi.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
