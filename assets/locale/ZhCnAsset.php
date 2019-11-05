<?php
/**
 * ZhCnAsset.php
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
 * @class \p2m\assets\locale\ZhCnAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ZhCnAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ZhCnAsset',
 */

namespace p2m\assets\locale;

class ZhCnAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'zh-cn.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-XjUTsP+pYBX4Kwg40gPvhWcRGKZh9gUpDForgg5bwsnyNU+VabKhRX6XkyM6fLk4',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'zh-cn.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}