<?php
/**
 * FyAsset.php
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
 * @class \p2m\assets\locale\FyAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\FyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\FyAsset',
 */

namespace p2m\assets\locale;

class FyAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'fy.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-3T4DAJstbG8cQmBwII3gi0jTivZnBwRTcVfHg3KEMr40sQQGM3KwACaGHNC0mkDx',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'fy.js',
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
