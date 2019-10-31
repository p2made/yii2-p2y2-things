<?php
/**
 * DataTablesBootstrapAsset.php
 *
 * Yii2 asset for DataTables Bootstrap
 * https://www.datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesBootstrapAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesBootstrapAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesBootstrapAsset',
 */

namespace p2m\assets\datatables;

class DataTablesBootstrapAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.10.18';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/##-version-##',
			'css' => [
				'css/dataTables.bootstrap4.min.css',
			],
			'js' => [
				'js/dataTables.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-EkHEUZ6lErauT712zSr0DZ2uuCmi3DoQj6ecNdHQXpMpFNGAQ48WjfXCE5n20W+R',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-uiSTMvD1kcI19sAHJDVf68medP9HA2E2PzGis9Efmfsdb8p9+mvbQNgFhzii1MEX',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-bs4',
			'css' => [
				'css\dataTables.bootstrap4.min.css',
			],
			'js' => [
				'js\dataTables.bootstrap4.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\base\DataTablesBase',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
