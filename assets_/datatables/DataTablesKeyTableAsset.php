<?php
/**
 * DataTablesKeyTableAsset.php
 *
 * Yii2 asset for DataTables KeyTable
 * https://github.com/DataTables/KeyTable
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesKeyTableAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesKeyTableAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesKeyTableAsset',
 */

namespace p2m\assets\datatables;

class DataTablesKeyTableAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.5.0';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/keytable/##-version-##',
			'css' => [
				'css/keyTable.bootstrap4.min.css',
			],
			'js' => [
				'js/keyTable.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-yJbK2SgMp7dq69V9ykO2BN4oLSTAdtCT2rijg6Q7XggrijC8tXH3joWeewmRunmA',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-tYn4iw6//3CR7hRfLIB6kNnlIl9UF+D2myFuIG/VDVxATo+g80g5VVQZsIWFHGUG',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-keytable-bs4',
			'css' => [
				'css/keyTable.bootstrap4.min.css',
			],
			'js' => [
				'js/keyTable.bootstrap4.min.js',
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
