<?php
/**
 * DataTablesAutoFillAssetBase.php
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
 * @class \p2m\assets\base\DataTablesAutoFillAssetBase
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
 * p2m\assets\base\DataTablesAutoFillAssetBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\DataTablesAutoFillAssetBase',
 */

namespace p2m\assets\base;

class DataTablesAutoFillAssetBase extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-autofill';

	protected $packageVersion = '2.3.4';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##version##',
			'js' => [
				'js/dataTables.autoFill.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-2IhmQai5yN8b2EX5F5BWSAUJ0Te/LtSC0BGnUuoUcQcnD9qVVpurky9IRmLnegaN',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/datatables.net-buttons',
			'js' => [
				'js/dataTables.autoFill.min.js',
			],
		],
		'depends' => [
			'p2m\assets\base\P2CoreAsset',
		],
	];
}
