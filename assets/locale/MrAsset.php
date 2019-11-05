<?php
/**
 * MrAsset.php
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
 * @class \p2m\assets\locale\MrAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\MrAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\MrAsset',
 */

namespace p2m\assets\locale;

class MrAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'mr.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-A/46sqgeqieLDQUOH6i1KsjS3RfCJ6FsC6IRoULo/SbAYxu/4mJpjrfStZu0Fj8m',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'mr.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
