<?php
/**
 * MasonryAsset.php
 *
 * Yii2 asset for Masonry
 * http://masonry.desandro.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\MasonryAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\MasonryAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MasonryAsset',
 */

namespace p2m\assets;

class MasonryAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'masonry-layout';
}
