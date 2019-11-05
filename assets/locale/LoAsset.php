<?php
/**
 * LoAsset.php
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
 * @class \p2m\assets\locale\LoAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\LoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\LoAsset',
 */

namespace p2m\assets\locale;

class LoAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'lo.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-Et1qIkF76ugH3NlW7p8GOOS9nnTJDN9/0zZbGxzr+wAzqfJ73cmdFFBQWLxJC8KX',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'lo.js',
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
