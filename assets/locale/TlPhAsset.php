<?php
/**
 * TlPhAsset.php
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
 * @class \p2m\assets\locale\TlPhAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\TlPhAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\TlPhAsset',
 */

namespace p2m\assets\locale;

class TlPhAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'tl-ph.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-RhREaK3HaBWIHvCjDEaOKh1Re7dcOBtSskBHamo4xUJWx31hzeKhfnyg7t2GPCwH',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'tl-ph.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
