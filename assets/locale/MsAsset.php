<?php
/**
 * MsAsset.php
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
 * @class \p2m\assets\locale\MsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\MsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\MsAsset',
 */

namespace p2m\assets\locale;

class MsAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ms.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-i+IN0hJW3XJXP5qPRiAtdpFKU4jtYszbEzKxpbOriqXMH0MIrv4dWaLjfl4vNgrW',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ms.js',
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
