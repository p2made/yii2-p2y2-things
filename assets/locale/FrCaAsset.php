<?php
/**
 * FrCaAsset.php
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
 * @class \p2m\assets\locale\FrCaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\FrCaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\FrCaAsset',
 */

namespace p2m\assets\locale;

class FrCaAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'fr-ca.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-6n+nviiWTKB5imTPSatifyZMMx/83YkPzED2AECPZVl7OFDZ4SIVGXFE8uDUGAkc',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'fr-ca.js',
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
