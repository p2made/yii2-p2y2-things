<?php
/**
 * ArMaAsset.php
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
 * @class \p2m\assets\locale\ArMaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ArMaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ArMaAsset',
 */

namespace p2m\assets\locale;

class ArMaAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ar-ma.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-LWJ58K8z85sEUzFpnRNjpv+89KIvqbooo1XAiCSwz7ePrrhUs1gToJV21ySemhl3',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ar-ma.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
