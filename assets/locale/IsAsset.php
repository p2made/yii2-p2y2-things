<?php
/**
 * IsAsset.php
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
 * @class \p2m\assets\locale\IsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\IsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\IsAsset',
 */

namespace p2m\assets\locale;

class IsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-T6FzajuDSRSMB0Q50lNYFQoLw2FqGXneeZQm9+o95F+RU89uxVshMV9dwkG4fERI',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'is.js',
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
