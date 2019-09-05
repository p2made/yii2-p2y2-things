<?php
/**
 * DataTablesRowGroupAsset.php
 *
 * Yii2 asset for DataTables RowReorder
 * https://github.com/DataTables/RowReorder
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesRowGroupAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesRowGroupAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesRowGroupAsset',
 */

namespace p2m\assets\datatables;

class DataTablesRowGroupAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.1.0';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/rowgroup/##-version-##',
			'css' => [
				'css/rowGroup.bootstrap4.min.css',
			],
			'js' => [
				'js/rowGroup.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-sREga0SY0aJ5RceXnqhT2UZXVIHrg0DxCvj0RzvTw4hcB9oAz/yTn4dAuKZzicIA',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-PV7cZex+tAOjOmXOS0K0h9MnFEOzPDN5ZritVhb8J3joyrwp+bnsGSksqNdNUZfr',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-rowgroup-bs4',
			'css' => [
				'css/rowGroup.bootstrap4.min.css',
			],
			'js' => [
				'js/rowGroup.bootstrap4.min.js',
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
