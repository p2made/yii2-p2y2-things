<?php
/**
 * SeAsset.php
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
 * @class \p2m\assets\locale\SeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\SeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\SeAsset',
 */

namespace p2m\assets\locale;

class SeAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'se.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-ImEdyYMWI2E2pg/azA0RGEM53RrKmLFdPtPmZUA7wUQEKadFN5BGSlhfTwL/yo7m',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'se.js',
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
