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
	protected $assetName = 'bootstrap-plugin';

	protected $assetData = [
		'package' => 'bootstrap',
		'version' => '4.3.1',
		'baseUrl' => 'https://stackpath.bootstrapcdn.com/bootstrap/##-version-##',
		'sourcePath' => '@npm/bootstrap/dist',
		'static' => [
			'js' => [
				'js/bootstrap.bundle.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'js' => [
				'js/bootstrap.bundle.min.js',
			],
		],
	];
}
