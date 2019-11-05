<?php
/**
 * FullCalendarAsset.php
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
 * @class \p2m\assets\FullCalendarAsset
 */

/**
 * Load this asset with...
 * p2m\assets\FullCalendarAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FullCalendarAsset',
 */

namespace p2m\assets;

class FullCalendarAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'fullcalendar';

	protected $packageVersion = '3.10.1';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/fullcalendar@##-version-##/dist',
			'css' => [
				[
					'fullcalendar.min.css',
					'integrity' => 'sha384-mdYNffWokBizEbCT6AVUtjikREPx4Xie/WwFgE6+qb+h8epAkpW3d0NO5ERE3lsk',
					'crossorigin' => 'anonymous',
				],
				[
					'fullcalendar.print.min.css',
					'integrity' => 'sha384-Q4MjQXexIIZhDecCSVc79g7WtM16+sjB6ubWmtL2tM7bOFLC38NjV8SlNRcy/Xpl',
					'crossorigin' => 'anonymous',
					'media' => 'print',
				],
			],
			'js' => [
				'fullcalendar.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-ivvIdHDJeBKiNjk+36/EoCd4+YmEY6vutKat7pEoN3v2thfDTNvyAqyxt1c+P5RT',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/fullcalendar/dist',
			'css' => [
				'fullcalendar.min.css',
			],
			'js' => [
				'fullcalendar.min.js',
				[
					'fullcalendar.print.min.css',
					'media' => 'print',
				],
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\MomentAsset',
			'p2m\assets\FullCalendarPrintAsset',
		],
	];
}
