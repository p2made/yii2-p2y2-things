<?php
/**
 * HrAsset.php
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
 * @class \p2m\assets\locale\HrAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\HrAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\HrAsset',
 */

namespace p2m\assets\locale;

class HrAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'hr.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-gX4beohbTeFBBE7ASxO8IKHkVczMB+ahl6rPhsbXVybHRkbCDcSOFVIBr2Ws5xdB',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'hr.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
