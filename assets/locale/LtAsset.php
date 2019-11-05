<?php
/**
 * LtAsset.php
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
 * @class \p2m\assets\locale\LtAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\LtAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\LtAsset',
 */

namespace p2m\assets\locale;

class LtAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'lt.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-xWl8eCWusdNIfk5OUiYpz+fhGaEWUgaQEYgwJroV0Gkj3VfMVT5AsLYUc8XqYMG+',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'lt.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
