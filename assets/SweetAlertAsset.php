<?php
/**
 * SweetAlertAsset.php
 *
 * Yii2 asset for Sweetalert
 * https://sweetalert.js.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\SweetAlertAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\SweetAlertAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\SweetAlertAsset',
 */

namespace p2m\assets;

class _ExampleUnpkgAsset extends \p2m\base\assets\P2UnpkgAssetBase
{
	protected $assetName = 'sweetalert';

	public function init()
	{
		$this->assetData = $this->_assetData[$assetName];

		parent::init();
	}
}
