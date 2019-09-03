<?php
/**
 * JSZipAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-base
 * @class \p2m\base\assets\JSZipAsset
 */

/**
 * Load this asset with...
 * p2m\assets\JSZipAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JSZipAsset',
 */

namespace p2m\assets;

class JSZipAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.2.2';

	protected $assetName = 'jszip';

	protected $assetPath = 'dist';

	public $js = [
		'jszip.min.js'
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
