<?php
/**
 * GlAsset.php
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
 * @class \p2m\assets\locale\GlAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\GlAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\GlAsset',
 */

namespace p2m\assets\locale;

class GlAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'gl.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-nJYmS2NMYacb/M/IcCmxB5UhH6BfctnEZ8u3/bBJXW8pCjAJHbR+f0NJE9LdWmbu',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'gl.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}