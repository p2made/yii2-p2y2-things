<?php
/**
 * MomentTimezoneWithData19702030Asset.php
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
 * @class \p2m\assets\MomentTimezoneWithData19702030Asset
 */

/**
 * Load this asset with...
 * p2m\assets\MomentTimezoneWithData19702030Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\MomentTimezoneWithData19702030Asset',
 */

namespace p2m\assets;

class MomentTimezoneWithData19702030Asset extends \p2m\assets\base\MomentTimezoneAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment-timezone@##-version-##/builds',
			'js' => [
				'moment-timezone-with-data-1970-2030.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-59ZSLxtHqqesvZ+JRxvkQfa6QQV0a3RlOFESvn9AprLMxIfRX9i9J1HUZ1IssHXb',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment-timezone/builds',
			'js' => [
				'moment-timezone-with-data-1970-2030.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];
}