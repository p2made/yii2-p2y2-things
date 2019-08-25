<?php
/**
 * BootstrapSweetalertAsset.php
 *
 * Yii2 asset for Bootstrap Sweetalert
 * http://lipis.github.io/bootstrap-sweetalert/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\BootstrapSweetalertAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\BootstrapSweetalertAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\BootstrapSweetalertAsset',
 */

namespace p2m\assets;

class BootstrapSweetalertAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.0.1';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/##-version-##',
			'css' => [
				'sweetalert.min.css',
			],
			'js' => [
				'sweetalert.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha256-zuyRv+YsWwh1XR5tsrZ7VCfGqUmmPmqBjIvJgQWoSDo=',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha256-JirYRqbf+qzfqVtEE4GETyHlAbiCpC005yBTa4rj6xg=',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@p2m@/bootstrap-social-##-version-##',
			'css' => [
				'sweetalert.min.css',
			],
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
