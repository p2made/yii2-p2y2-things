<?php
/**
 * VfsFontsAsset.php
 *
 * Yii2 asset for PdfMake
 * http://pdfmake.org/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\VfsFontsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\VfsFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\VfsFontsAsset',
 */

namespace p2m\assets;

class VfsFontsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '0.1.58';

	protected $resourceData = [
		'static' => [
			'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/##-version-##',
			'jsOptions' => [
				'integrity' => 'sha256-UsYCHdwExTu9cZB+QgcOkNzUCTweXr5cNfRlAAtIlPY=',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@vendor/bpampuch/pdfmake/build',
		],
	];

	public $js = [
		'vfs_fonts.js.min.js'
	];

	public $depends = [
		'p2m\assets\P2CoreAsset'
	];

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
