<?php
/**
 * MsMyAsset.php
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
 * @class \p2m\assets\locale\MsMyAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\MsMyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\MsMyAsset',
 */

namespace p2m\assets\locale;

class MsMyAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'ms-my.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-xQgIu0+EQ6BqXMk6T9srEfR7q6Z8tSNk7XvJU//QjiyHCY5M2U4sTjC4M4fKD1eX',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ms-my.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
