<?php
/**
 * EtAsset.php
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
 * @class \p2m\assets\locale\EtAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\EtAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\EtAsset',
 */

namespace p2m\assets\locale;

class EtAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'et.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-xVYI+V0sfOy1eSF5AZhipXyAgNtH2JYdy4g00k1lY0JiJHd+hSJ8blBDoPDAK9e4',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'et.js',
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
