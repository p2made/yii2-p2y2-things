<?php
/**
 * BnAsset.php
 *
 * Yii2 asset for moment
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\locale\BnAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\BnAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\BnAsset',
 */

namespace p2m\assets\locale;

class BnAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-MbTPoE48XO7Y03ET7AHxOSlr0Vxhh3LzdyMZBz6j9gwoyHd4LX1OsbvbQRXtft9k',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'bn.js',
		],
		'depends' => [
			'p2massets2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
