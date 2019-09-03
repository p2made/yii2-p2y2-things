<?php
/**
 * EkkoLightboxAsset.php
 *
 * Yii2 asset for Xxxxxxxxx
 * http://example.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\EkkoLightboxAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\EkkoLightboxAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\EkkoLightboxAsset',
 */

namespace p2m\assets;

class EkkoLightboxAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'ekko-lightbox';

	public function init()
	{
		$this->assetData = $this->_assetData[$assetName];
		$this->configureUnpkgAsset();
		parent::init();
	}
}
