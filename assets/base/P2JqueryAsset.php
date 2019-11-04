<?php
/**
 * P2JqueryAsset.php
 *
 * Yii2 asset for jQuery
 * https://jquery.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\base\P2JqueryAsset
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
	protected $packageName = 'jquery';

	protected $packageVersion = '3.4.1';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/jquery@##version##/dist',
			'js' => [
				'jquery.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/jquery/dist',
			'js' => [
				'jquery.min.js',
			],
		],
	];
}
