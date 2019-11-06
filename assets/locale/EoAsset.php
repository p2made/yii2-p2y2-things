<?php
/**
 * EoAsset.php
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
 * @class \p2m\assets\locale\EoAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\EoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\EoAsset',
 */

namespace p2m\assets\locale;

class EoAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-lsMogUveKE7SPZhMmpXvB21E0Os6/RT2Ox+zWNMPpfS1qZJN0oV8ENPrrp1uhQPi',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'eo.js',
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
