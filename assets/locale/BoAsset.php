<?php
/**
 * BoAsset.php
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
 * @class \p2m\assets\locale\BoAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\BoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\BoAsset',
 */

namespace p2m\assets\locale;

class BoAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'bo.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-MpUMmH5y9uQt6QXD6xCX7GHM+FmmQhrAJRDM82p0/SBcoVee/otzvmjUPcvyvZ72',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'bo.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}