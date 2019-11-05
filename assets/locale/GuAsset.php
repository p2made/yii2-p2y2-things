<?php
/**
 * GuAsset.php
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
 * @class \p2m\assets\locale\GuAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\GuAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\GuAsset',
 */

namespace p2m\assets\locale;

class GuAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'gu.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-A8wwfHNd84WAR5ZtF8bTTGu25bo6wfP62jLLlA4u7j9tsT35USjwW+8Og17B7FU4',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'gu.js',
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
