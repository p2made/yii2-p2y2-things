<?php
/**
 * DataTablesResponsiveAsset.php
 *
 * Yii2 asset for DataTables Responsive
 * https://github.com/DataTables/Responsive
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesResponsiveAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesResponsiveAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesResponsiveAsset',
 */

namespace p2m\assets\datatables;

class DataTablesResponsiveAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.2.2';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/responsive/##-version-##',
			'css' => [
				'css/responsive.bootstrap4.min.css',
			],
			'js' => [
				'js/responsive.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-50PJC5h4XMO6dSTQY4Ol00P2fJMX5wWrQb+vi0KHSDsQxt7/lf/h2aMpB+npa4xo',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-1dq/VDAF2KuzYz0N0KG39nI4v4MC7WeyP+lfpNEGOlCgaO61VwJxK7FRBYuiewdG',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-responsive-bs4',
			'css' => [
				'css/responsive.bootstrap4.min.css',
			],
			'js' => [
				'js/responsive.bootstrap4.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\base\DataTablesResponsiveBase',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
