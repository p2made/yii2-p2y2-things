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
	protected $version = '2.1.2';

	protected $assetName = 'sweetalert';

	protected $assetPath = 'dist';

	public $js = [
		'sweetalert.min.js'
	];

	public $depends = [
		'p2m\assets\P2CoreAsset'
	];

	public function init()
	{
		$this->configureUnpkgAsset();
		parent::init();
	}
}
