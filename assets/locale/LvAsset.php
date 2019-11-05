<?php
/**
 * LvAsset.php
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
 * @class \p2m\assets\locale\LvAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\LvAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\LvAsset',
 */

namespace p2m\assets\locale;

class LvAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'lv.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-wAZNvqqwnuxWj8+jVBxwiboDNHMGQPsr4srD9KMI3BE/ubl3AX5npwNk39k4EAsw',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'lv.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
