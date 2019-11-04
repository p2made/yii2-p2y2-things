<?php
/**
 * DataTablesResponsiveAssetBase.php
 *
 * Yii2 asset for DataTables
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\base\DataTablesResponsiveAssetBase
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\DataTablesResponsiveAssetBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\DataTablesResponsiveAssetBase',
 */

namespace p2m\assets\base;

class DataTablesResponsiveAssetBase extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-responsive';

	protected $packageVersion = '2.2.3';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##version##',
			'js' => [
				'js/jsfile.js',
			],
			'jsOptions' => [
				'integrity' => 'hash',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/datatables.net-buttons',
			'js' => [
				'js/jsfile.js',
			],
		],
		'depends' => [
			'p2m\assets\base\P2CoreAsset',
			'p2m\assets\DataTablesAsset',
		],
	];
}
