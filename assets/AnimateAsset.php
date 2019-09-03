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
	protected $assetName = 'animate.css';

	public function init()
	{
		$this->assetData = $this->_assetData[$assetName];

		parent::init();
	}
}
