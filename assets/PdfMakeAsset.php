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
	protected $version = '0.1.58';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/##-version-##',
			'jsOptions' => [
				'integrity' => 'sha256-OTZ52txWFX9FcHKxJDvp7VYnyLrrYK1wKiS7hZafU/c=',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@vendor/bpampuch/pdfmake/build',
		],
	);

	public $js = [
		'pdfmake.min.js'
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
