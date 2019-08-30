<?php
/**
 * DataTablesButtonsBase.php
 *
 * Yii2 asset for DataTables Buttons
 * https://github.com/DataTables/Buttons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesButtonsBase
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\base\DataTablesButtonsBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\base\DataTablesButtonsBase',
 */

namespace p2m\assets\datatables;

class DataTablesButtonsBase extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.5.6';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/dataTables.buttons.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-iuMWo+ZoS1VepZMhnsiTt4GMFUcBlrIofXPssxpFBjzASinAB+mK4Kc/ePpzM4TX',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-buttons',
			'js' => [
				'js/dataTables.buttons.min.js',
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
