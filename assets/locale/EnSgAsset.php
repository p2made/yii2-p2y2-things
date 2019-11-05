<?php
/**
 * EnSgAsset.php
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
 * @class \p2m\assets\locale\EnSgAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\EnSgAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\EnSgAsset',
 */

namespace p2m\assets\locale;

class EnSgAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'en-SG.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-Iq1I+veSV1EJNzARIvN8Mx0uvvrl4sxbb9fsLPgKL7XSNfgki1885Gw/xk3aj0wO',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'en-SG.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
