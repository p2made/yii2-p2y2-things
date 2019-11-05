<?php
/**
 * ZhHkAsset.php
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
 * @class \p2m\assets\locale\ZhHkAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ZhHkAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ZhHkAsset',
 */

namespace p2m\assets\locale;

class ZhHkAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'zh-hk.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-1cSu+ZuUXxjzydWuMWqMfwY4Uhl2FAy7DT0qre3jQOgtw79P/ymPxs6NoL+Mdgk/',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'zh-hk.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
