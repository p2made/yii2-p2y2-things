<?php
/**
 * MomentTimezoneWithData10YearRangeAsset.php
 *
 * Yii2 asset for 
 * https://momentjs.com/timezone/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\MomentTimezoneWithData10YearRangeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentTimezoneWithData10YearRangeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentTimezoneWithData10YearRangeAsset',
 */

namespace p2m\assets;

class MomentTimezoneWithData10YearRangeAsset extends \p2m\assets\base\MomentTimezoneAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment-timezone@##version##/builds',
			'js' => [
				'moment-timezone-with-data-10-year-range.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-fO3cEHozXmapThhGq0+8sd29pE5J+KSzFriB9QC9SXDGPYiWQhKYVkcvekJaRZhT',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment-timezone/builds',
			'js' => [
				'moment-timezone-with-data-10-year-range.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];
}
