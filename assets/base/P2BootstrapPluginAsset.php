<?php
/**
 * P2BootstrapPluginAsset.php
 *
 * Yii2 asset for Bootstrap Plugin
 * http://getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2BootstrapPluginAsset
 * @license MIT
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2BootstrapPluginAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2BootstrapPluginAsset',
 */

namespace p2m\assets\base;

class P2BootstrapPluginAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '4.3.1';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://stackpath.bootstrapcdn.com/bootstrap/##-version-##',
			'js' => [
				'js/bootstrap.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@p2m@/bootstrap-##-version-##-dist',
			'js' => [
				'js/bootstrap.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM',
				'crossorigin' => 'anonymous',
			],
		],
		'depends' => [
			'p2m\assets\base\P2JqueryAsset',
		],
	);

	public function init()
	{
		$this->resourceData['static']['baseUrl'] .= $this->version;

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
