<?php
/**
 * EnIlAsset.php
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
 * @class \p2m\assets\locale\EnIlAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\EnIlAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\EnIlAsset',
 */

namespace p2m\assets\locale;

class EnIlAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-uA4j+xn6oSK3+shLe12NBEy33ulePEkpoEGq7sfcFahEj3hGjJqKJSYzJb/Wou+j',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'en-il.js',
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
