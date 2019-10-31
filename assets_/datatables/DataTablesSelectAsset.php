<?php
/**
 * DataTablesSelectAsset.php
 *
 * Yii2 asset for DataTables Select
 * https://github.com/DataTables/Select
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
 * p2m\assets\datatables\DataTablesSelectAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesSelectAsset',
 */

namespace p2m\assets\datatables;

class DataTablesSelectAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.3.0';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/select/##-version-##',
			'css' => [
				'css/select.bootstrap4.min.css',
			],
			'js' => [
				'js/select.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-GT95DpievPCoEMQK7wFUKNSmBUItft1absIeFqP30FKpnjz8YPvV34CC79GirigE',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-BOLkGGAnN6CMw/ec63leFIKz5xERBa18lsxFT23+lFmSNZ61jNjoS8InT2qguzJ+',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-select-bs4',
			'css' => [
				'css/select.bootstrap4.min.css',
			],
			'js' => [
				'js/select.bootstrap4.min.js',
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
