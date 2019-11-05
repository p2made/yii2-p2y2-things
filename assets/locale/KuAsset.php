<?php
/**
 * KuAsset.php
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
 * @class \p2m\assets\locale\KuAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\KuAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\KuAsset',
 */

namespace p2m\assets\locale;

class KuAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ku.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-c4vH9ZmZsEHvRtzRsY5rW7VvVlMiEKRFP8M+mLkHhlSWAuCZpon+l/XfWSaW2EMF',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ku.js',
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
