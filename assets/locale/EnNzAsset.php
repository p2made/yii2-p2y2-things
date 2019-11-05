<?php
/**
 * EnNzAsset.php
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
 * @class \p2m\assets\locale\EnNzAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\EnNzAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\EnNzAsset',
 */

namespace p2m\assets\locale;

class EnNzAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'en-nz.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-8d4pwCgZm98Fpsl+ouDy9ry4QfpeNI0l18sS8ZpexSle629f5vL8xsHhM8BMBCJC',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'en-nz.js',
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
