<?php
/**
 * PdfMakeAsset.php
 *
 * Yii2 asset for PdfMake
 * http://pdfmake.org/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\PdfMakeAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\PdfMakeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\PdfMakeAsset',
 */

namespace p2m\assets;

class PdfMakeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetName = 'pdfmake';

	public function init()
	{
		$this->assetData = $this->_assetData[$assetName];
		$this->newConfigureAsset();

		parent::init();
	}
}
