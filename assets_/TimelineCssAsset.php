<?php
/**
 * TimelineCssAsset.php
 *
 * Yii2 asset for Timeline CSS
 * https://github.com/christian-fei/Timeline.css
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\TimelineCssAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\TimelineCssAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\TimelineCssAsset',
 */

namespace p2m\assets;

class TimelineCssAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'timeline.css';
}
