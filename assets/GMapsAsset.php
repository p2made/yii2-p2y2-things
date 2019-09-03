<?php
/**
 * GMapsAsset.php
 *
 * Yii2 asset for GMaps.js
 * http://hpneo.github.io/gmaps/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\GMapsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\GMapsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\GMapsAsset',
 */

namespace p2m\assets;

class GMapsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'gmaps.js';

	public function init()
	{
		$this->assetData = $this->_assetData[$assetName];
		$this->newConfigureAsset();

		parent::init();
	}
}
