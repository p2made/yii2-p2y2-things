<?php
/**
 * DataTablesColReorderAsset.php
 *
 * Yii2 asset for DataTables ColReorder
 * https://github.com/DataTables/ColReorder
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesColReorderAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesColReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesColReorderAsset',
 */

namespace p2m\assets\datatables;

class DataTablesColReorderAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.5.0';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/colreorder/##-version-##',
			'css' => [
				'css/colReorder.bootstrap4.min.css',
			],
			'js' => [
				'js/colReorder.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-RZygVb1fZHVXuu7ppEDHdp39XsL8YoCh4VjdoKiWkjwwfOXVpxJhSsUfMKKmRzam',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-0TkfIniai+f9zIGcJOumyqzPzYOnWzHyjFcoB0+hQ+sU1lDJsgYPJoHXURh3uKbC',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-colreorder-bs4',
			'css' => [
				'css/colReorder.bootstrap4.min.css',
			],
			'js' => [
				'js/colReorder.bootstrap4.min.js',
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
