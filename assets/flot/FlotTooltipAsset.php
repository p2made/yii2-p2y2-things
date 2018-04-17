<?php
/**
 * FlotTooltipAsset.php
 *
 * Yii2 asset for Flot Tooltip
 * http://getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\flot\FlotTooltipAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\flot\FlotTooltipAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\flot\FlotTooltipAsset',
 */

namespace p2m\assets\flot;


class FlotTooltipAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
