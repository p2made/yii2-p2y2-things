<?php
/**
 * KkAsset.php
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
 * @class \p2m\assets\locale\KkAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\KkAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\KkAsset',
 */

namespace p2m\assets\locale;

class KkAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'kk.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-wh3/pfv1QaS2Vl9/BhOaPR3FduTOyXdHisJ9JTJJIhDhdp1Zv079veOfzhHP7hj7',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'kk.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}