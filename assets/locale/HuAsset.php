<?php
/**
 * HuAsset.php
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
 * @class \p2m\assets\locale\HuAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\HuAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\HuAsset',
 */

namespace p2m\assets\locale;

class HuAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'hu.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-IU3EwHHTg5t124uEI6sxd4qN7MhZVoD0KJ3trypqxLxBCrA0bz1C7LB0CnrOil5H',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'hu.js',
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
