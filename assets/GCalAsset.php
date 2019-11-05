<?php
/**
 * GCalAsset.php
 *
 * Yii2 asset for FullCalendar
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\GCalAsset
 */

/**
 * Load this asset with...
 * p2m\assets\GCalAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\GCalAsset',
 */

namespace p2m\assets;

class GCalAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'fullcalendar';

	protected $packageVersion = '3.10.1';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/fullcalendar@##-version-##/dist',
			'js' => [
				'gcal.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-BTR3F1dHjU7D0+QiywB/Q412qtnIaJCI2dUNb7yKyWOvzXjupdzk72THpdU/rliu',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/fullcalendar/dist',
			'js' => [
				'gcal.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];
}
