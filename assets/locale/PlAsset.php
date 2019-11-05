<?php
/**
 * PlAsset.php
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
 * @class \p2m\assets\locale\PlAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\PlAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\PlAsset',
 */

namespace p2m\assets\locale;

class PlAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'pl.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-MXnBk+ASeoIIycyDp99sEuZHTFm/9yB13tigPjxTIvn2oxW09pl0qn8yrVdqTCVx',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'pl.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
