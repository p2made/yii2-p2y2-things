<?php
/**
 * RuAsset.php
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
 * @class \p2m\assets\locale\RuAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\RuAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\RuAsset',
 */

namespace p2m\assets\locale;

class RuAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'ru.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-ttXWKaTKDBbJ1KaNqRnsQqlDhgF0Layj3xmMnOWrUtJ/LvSiI5mTJ+gr2oax8w7l',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'ru.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
