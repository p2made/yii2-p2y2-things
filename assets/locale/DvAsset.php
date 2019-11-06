<?php
/**
 * DvAsset.php
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
 * @class \p2m\assets\locale\DvAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\DvAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\DvAsset',
 */

namespace p2m\assets\locale;

class DvAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-iCMfCRMp6GeerBQAYkeTu569IlfCmrK+igIFiksvxSo3l5b+smK3GMm03odeFqJ5',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'dv.js',
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
