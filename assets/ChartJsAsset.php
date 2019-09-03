<?php
/**
 * ChartJsAsset.php
 *
 * Yii2 asset for Xxxxxxxxx
 * http://example.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\ChartJsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\ChartJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\ChartJsAsset',
 */

namespace p2m\assets;

class ChartJsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'chart.js';

	public function init()
	{
		$this->assetData = $this->_assetData[$assetName];
		$this->newConfigureAsset();

		parent::init();
	}
}
