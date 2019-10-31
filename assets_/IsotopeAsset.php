<?php
/**
 * IsotopeAsset.php
 *
 * Yii2 asset for Isotope
 * http://isotope.metafizzy.co
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\IsotopeAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\IsotopeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\IsotopeAsset',
 */

namespace p2m\assets;

class IsotopeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'jquery.isotope';
}
