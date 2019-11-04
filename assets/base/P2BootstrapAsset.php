<?php
/**
 * P2BootstrapAsset.php
 *
 * Yii2 asset for Bootstrap
 * https://getbootstrap.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\base\P2BootstrapAsset
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
 * p2m\assets\base\P2BootstrapAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2BootstrapAsset',
 */

namespace p2m\assets\base;

class P2BootstrapAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'bootstrap';

	protected $packageVersion = '4.3.1';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/bootstrap@##version##/dist',
			'css' => [
				'css/bootstrap.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'js/bootstrap.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/bootstrap/dist',
			'css' => [
				'css/bootstrap.min.css',
			],
			'js' => [
				'js/bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\base\P2YiiAsset',
		],
	];
}
