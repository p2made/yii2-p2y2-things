<?php
/**
 * TetAsset.php
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
 * @class \p2m\assets\locale\TetAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\TetAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\TetAsset',
 */

namespace p2m\assets\locale;

class TetAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'tet.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-HyXUi2qA6TmV7TXscCe95jHL0BZKP9kyBxSiXxfvsQnHvyKQI6KVOum/cD5C/urc',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'tet.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
