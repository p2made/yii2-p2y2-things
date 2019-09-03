<?php
/**
 * RaphaelAsset.php
 *
 * Yii2 asset for Raphael
 * http://dmitrybaranovskiy.github.io/raphael/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\RaphaelAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\RaphaelAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\RaphaelAsset',
 */

namespace p2m\assets;

class RaphaelAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'raphael';

	public function init()
	{
		$this->assetData = $this->_assetData[$assetName];

		parent::init();
	}
}
