<?php
/**
 * DataTablesAssetBase.php
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
 * @class \p2m\assets\base\DataTablesAssetBase
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
 * p2m\assets\base\DataTablesAssetBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\DataTablesAssetBase',
 */

namespace p2m\assets\base;

class DataTablesAssetBase extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net';

	protected $packageVersion = '1.10.20';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/##version##',
			'js' => [
				'js/jquery.dataTables.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-L74JDRkaoB7PWnReNepwX6+kSckc13TJXrka4EerY9jxQxSDl0dTguSLcA7dEfq8',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/datatables.net',
			'js' => [
				'js/jquery.dataTables.min.js',
			],
		],
		'depends' => [
			'p2m\assets\base\P2CoreAsset',
		],
	];
}
