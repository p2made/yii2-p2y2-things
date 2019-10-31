<?php
/**
 * DataTablesScrollerAsset.php
 *
 * Yii2 asset for DataTables Scroller
 * https://github.com/DataTables/Scroller
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesScrollerAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesScrollerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesScrollerAsset',
 */

namespace p2m\assets\datatables;

class DataTablesScrollerAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.0.0';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/scroller/##-version-##',
			'css' => [
				'css/scroller.bootstrap4.min.css',
			],
			'js' => [
				'js/scroller.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-wIRbCocqGp2W33vrUhPum15S17ENhIRifUVmP+DPvKsI9jaMV6DGZ1JQEm0Wts8b',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-8NepXINgwyY7TGQs3Y4A6fMK0kQ3SuiFFGqLh6CFeHn/DcZR1mAD+t6QRNH4Vbq2',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-scroller-bs4',
			'css' => [
				'css/scroller.bootstrap4.min.css',
			],
			'js' => [
				'js/scroller.bootstrap4.min.js',
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
