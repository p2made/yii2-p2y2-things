<?php
/**
 * ItAsset.php
 *
 * Yii2 asset for 
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\locale\ItAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ItAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ItAsset',
 */

namespace p2m\assets\locale;

class ItAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'it.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-iw2KYYLh0lSN49INdwq42BYduR8NUebrnt2y954lF04/w4npzUhvxzHobFYNvAzB',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'it.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
