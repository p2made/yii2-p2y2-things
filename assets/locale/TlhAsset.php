<?php
/**
 * TlhAsset.php
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
 * @class \p2m\assets\locale\TlhAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\TlhAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\TlhAsset',
 */

namespace p2m\assets\locale;

class TlhAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'tlh.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-ailOFCVa8LzIi4eGtHp2JiAicPEJ/XVnOxiK9oDJDqhopPvMOmSYpB+/eFt6tvHj',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'tlh.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
