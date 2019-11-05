<?php
/**
 * ArTnAsset.php
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
 * @class \p2m\assets\locale\ArTnAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ArTnAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ArTnAsset',
 */

namespace p2m\assets\locale;

class ArTnAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ar-tn.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-CRXqaxfgljMvKtW9OyhzqeAEf5GU1aRyt01tGDkYe8TajKLl+DHNdfL6JKGMsgs5',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ar-tn.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
