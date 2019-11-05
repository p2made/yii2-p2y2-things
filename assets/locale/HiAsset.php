<?php
/**
 * HiAsset.php
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
 * @class \p2m\assets\locale\HiAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\HiAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\HiAsset',
 */

namespace p2m\assets\locale;

class HiAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'hi.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-dGcYrEurfTFX3tY4c805jKS9QB+x+nf179cCw0Lr4pP7eEyCuQNN9hZc80kLQXiZ',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'hi.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
