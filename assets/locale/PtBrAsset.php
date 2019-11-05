<?php
/**
 * PtBrAsset.php
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
 * @class \p2m\assets\locale\PtBrAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\PtBrAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\PtBrAsset',
 */

namespace p2m\assets\locale;

class PtBrAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'pt-br.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-rMnAUuld2UG2Cd+wqmGwCPZGHemXzhyJss9LFN3y2b8FNsBOrGEHpbeUFMiP1rx+',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'pt-br.js',
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
