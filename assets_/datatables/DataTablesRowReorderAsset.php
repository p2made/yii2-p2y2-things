<?php
/**
 * DataTablesRowReorderAsset.php
 *
 * Yii2 asset for DataTables RowReorder
 * https://github.com/DataTables/RowReorder
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesRowReorderAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesRowReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesRowReorderAsset',
 */

namespace p2m\assets\datatables;

class DataTablesRowReorderAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.2.4';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/rowreorder/##-version-##',
			'css' => [
				'css/rowReorder.bootstrap4.min.css',
			],
			'js' => [
				'js/rowReorder.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-pVrsWa1E1GlEJUfnZXLCxT6AScWbwY/NkJAW8vKG5ZhEbCsSUfj7tY/ePTD9MevD',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-L5j63zghDDQIDhoqtf+8j5PbKSAmg5Zha4iSoodiDYJJXkw7nG5qbrhlhPh500ab',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-rowreorder-bs4',
			'css' => [
				'css/rowReorder.bootstrap4.min.css',
			],
			'js' => [
				'js/rowReorder.bootstrap4.min.js',
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
