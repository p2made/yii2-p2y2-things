<?php
/**
 * AnimateAsset.php
 *
 * Yii2 asset for Animate CSS
 * https://daneden.github.io/animate.css/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\AnimateAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\AnimateAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\AnimateAsset',
 */

namespace p2m\assets;

class AnimateAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.7.2';

	protected $assetName = 'animate.css';

	public $css = [
		'animate.min.css'
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];

	public function init()
	{
		$this->configureUnpkgAsset();
		parent::init();
	}
}
