<?php
/**
 * P2JqueryAsset.php
 *
 * Yii2 asset for jQuery
 * http://jquery.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2JqueryAsset
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
 * p2m\assets\base\P2JqueryAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2JqueryAsset',
 */

namespace p2m\assets\base;

class P2JqueryAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $assetData = [
		'package' => 'jquery',
		'version' => '3.4.1',
		'baseUrl' => 'https://code.jquery.com',
		'sourcePath' => '@npm/jquery/dist',
		'static' => [
			'js' => [
				'jquery-3.4.1.slim.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'js' => [
				'jquery.slim.min.js',
			],
		],
	];
}
