<?php
/**
 * ArSaAsset.php
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
 * @class \p2m\assets\locale\ArSaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ArSaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ArSaAsset',
 */

namespace p2m\assets\locale;

class ArSaAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'ar-sa.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-2hXYwuAF343TBLq8KtxjEuqRgAc/cqSVRAkFnUPVHbWZuzPxWPko0u/D8P3OInS3',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ar-sa.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
