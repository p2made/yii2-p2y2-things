<?php
/**
 * HeAsset.php
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
 * @class \p2m\assets\locale\HeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\HeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\HeAsset',
 */

namespace p2m\assets\locale;

class HeAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'he.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-fDajyYCz7mpQK3Ls/ztiApd68P0pqZuHRn2M+hGrv5bKAeTtgxAEtPZN2hEkKodW',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'he.js',
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
