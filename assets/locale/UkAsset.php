<?php
/**
 * UkAsset.php
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
 * @class \p2m\assets\locale\UkAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\UkAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\UkAsset',
 */

namespace p2m\assets\locale;

class UkAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'uk.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-k/moZUTOpN+IJvjcg1I0qAf7wLwf01i8I7axQB+xCpRZ6If2B9CiUIQwAdaDlwz/',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'uk.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}