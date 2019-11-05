<?php
/**
 * FaAsset.php
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
 * @class \p2m\assets\locale\FaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\FaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\FaAsset',
 */

namespace p2m\assets\locale;

class FaAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'fa.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-S/+0vKTcjU1uWY1JH+v26KluS4rmACawhC0mz4y8KFemhWTD4nPI6lhSBNNExyKs',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'fa.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
