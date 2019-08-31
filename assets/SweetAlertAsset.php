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

class SweetAlertAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.1.2';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/##-version-##',
			'js' => [
				'sweetalert.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/sweetalert/dist',
			'js' => [
				'sweetalert.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
