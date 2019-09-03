<?php
/**
 * SimpleLineIconsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-base
 * @class \p2m\base\assets\SimpleLineIconsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\SimpleLineIconsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\SimpleLineIconsAsset',
 */

namespace p2m\assets;

class SimpleLineIconsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.4.1';

	protected $assetName = 'simple-line-icons';

	public $css = [
		'css/simple-line-icons.css'
	];

	public $depends = [
		'p2m\assets\P2CoreAsset'
	];

	public function init()
	{
		$this->configureUnpkgAsset();
		parent::init();
	}
}
