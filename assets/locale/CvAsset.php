<?php
/**
 * CvAsset.php
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
 * @class \p2m\assets\locale\CvAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\CvAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\CvAsset',
 */

namespace p2m\assets\locale;

class CvAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##version##/locale',
			'js' => [
				'cv.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-rUx/V9djWGfuxqDt2OyXfOeELw0fVRV+JEXjTbGVhu7Y3pYhd7WUHlmKj6zzAEHO',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'cv.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
