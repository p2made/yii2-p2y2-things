<?php
/**
 * MagnificPopupAsset.php
 *
 * Yii2 asset for Magnific Popup
 * http://dimsemenov.com/plugins/magnific-popup/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\MagnificPopupAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\MagnificPopupAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MagnificPopupAsset',
 */

namespace p2m\assets; /* edit this if using elsewhere */

class MagnificPopupAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'magnific-popup';

	public function init()
	{
		$this->assetData = $this->_assetData[$assetName];

		parent::init();
	}
}
