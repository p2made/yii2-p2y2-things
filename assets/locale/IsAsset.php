<?php
/**
 * IsAsset.php
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
 * @class \p2m\assets\locale\IsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\IsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\IsAsset',
 */

namespace p2m\assets\locale;

class IsAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'is.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-T6FzajuDSRSMB0Q50lNYFQoLw2FqGXneeZQm9+o95F+RU89uxVshMV9dwkG4fERI',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'is.js',
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
