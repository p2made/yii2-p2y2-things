<?php
/**
 * KnAsset.php
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
 * @class \p2m\assets\locale\KnAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\KnAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\KnAsset',
 */

namespace p2m\assets\locale;

class KnAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'kn.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-FD/5J0m0aJsg7WZf838bt/SCmhGj/5ntWuDkav+BDmLOhtN0OEY/J4hX7Dz/BYMY',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'kn.js',
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
