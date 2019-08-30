<?php
/**
 * DataTablesFixedColumnsAsset.php
 *
 * Yii2 asset for DataTables FixedColumns
 * https://github.com/DataTables/FixedColumns
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesFixedColumnsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesFixedColumnsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesFixedColumnsAsset',
 */

namespace p2m\assets\datatables;

class DataTablesFixedColumnsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.2.5';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/fixedcolumns/##-version-##',
			'css' => [
				'css/fixedColumns.bootstrap4.min.css',
			],
			'js' => [
				'js/fixedColumns.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-6UaahaGONjdvtByljPEW3meoPtJdoyYctaoe/KjxgUn7Vhf/4D7RSschQsQrBVIQ',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-c/3Lz+z1aZPDTPVhQpOQItupH+vL0VPyewM+sDzFxtA2T36OmJG5BSpYB5vPUGaL',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-fixedcolumns-bs4',
			'css' => [
				'css/fixedColumns.bootstrap4.min.css',
			],
			'js' => [
				'js/fixedColumns.bootstrap4.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
