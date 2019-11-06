<?php
/**
 * MomentTimezoneWithData10YearRangeAsset.php
 *
 * Yii2 asset for moment-timezone
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

class MomentTimezoneWithData10YearRangeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment-timezone';

	protected $packageVersion = '0.5.27';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment-timezone@##-version-##/builds',
		'sourcePath' => '@npm/moment-timezone/builds',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-fO3cEHozXmapThhGq0+8sd29pE5J+KSzFriB9QC9SXDGPYiWQhKYVkcvekJaRZhT',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'moment-timezone-with-data-10-year-range.min.js',
		],
		'depends' => [
			'p2massets2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
