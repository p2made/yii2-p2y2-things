<?php
/**
 * SlAsset.php
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
 * @class \p2m\assets\locale\SlAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\SlAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\SlAsset',
 */

namespace p2m\assets\locale;

class SlAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'sl.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-34SIOLRzzHQ7eSZzKJKRJoCeTLk4LJYdFgafzYxAAOGbhA4xJeaDPSaq/dnQ8nYS',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'sl.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
