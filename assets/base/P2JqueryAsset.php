<?php
/**
 * P2JqueryAsset.php
 *
 * Yii2 asset for jQuery
 * http://jquery.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
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
	protected $assetName = 'jquery';

	protected $assetData = [
		'version' => '3.4.1',
		'pattern' => 'jquery',
		'baseUrl' => 'https://code.jquery.com',
		'sourcePath' => '@npm/jquery/dist',
		'static' => [
			'js' => [
				'jquery-3.4.1.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'js' => [
				'jquery.min.js'
			],
		],
	];


	/**
	public $baseUrl = 'https://code.jquery.com';
	public $js = [
		'jquery-3.4.1.min.js',
	];
	public $jsOptions = [
		'integrity' => 'sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh',
		'crossorigin' => 'anonymous',
	];
	 */

	/**
	public $sourcePath = '@npm/jquery/dist';
	public $js = [
		'jquery.min.js',
	];
	 */
}
