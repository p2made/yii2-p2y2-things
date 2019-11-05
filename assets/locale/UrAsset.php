<?php
/**
 * UrAsset.php
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
 * @class \p2m\assets\locale\UrAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\UrAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\UrAsset',
 */

namespace p2m\assets\locale;

class UrAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ur.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-tXdbw8vJDX0wQNsfHxXKItupoFzkM9/ePgIE8EEyPnfNoj8Y6NenQI4t7uINayl+',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ur.js',
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
