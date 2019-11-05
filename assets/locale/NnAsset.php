<?php
/**
 * NnAsset.php
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
 * @class \p2m\assets\locale\NnAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\NnAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\NnAsset',
 */

namespace p2m\assets\locale;

class NnAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'nn.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-LB0fTgXSgcV37ZiuybZrwaN1NDzZXw+jmz9Ctk9nwCtaPF9H5G78tYhEXI0WD7pZ',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'nn.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
