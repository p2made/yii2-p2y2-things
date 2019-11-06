<?php
/**
 * BgAsset.php
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
 * @class \p2m\assets\locale\BgAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\BgAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\BgAsset',
 */

namespace p2m\assets\locale;

class BgAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-qfz7Lb2BKZ/5gB9t8QnEfS2J/tzGWqmw2kTqMatIV7sd48z11zsO6qM4UspT6nSo',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'bg.js',
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
