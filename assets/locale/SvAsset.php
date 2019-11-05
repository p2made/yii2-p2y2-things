<?php
/**
 * SvAsset.php
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
 * @class \p2m\assets\locale\SvAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\SvAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\SvAsset',
 */

namespace p2m\assets\locale;

class SvAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'sv.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-IH/yagJAiVJ/b5npOx5GqpIsb5tWOvrHus40ITn40wLaNFTo8UU9lmmzRf03zk7R',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'sv.js',
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
