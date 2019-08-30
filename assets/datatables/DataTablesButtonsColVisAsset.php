<?php
/**
 * DataTablesButtonsColVisAsset.php
 *
 * Yii2 asset for DataTables Buttons ColVis
 * https://github.com/DataTables/Buttons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesButtonsColVisAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesButtonsColVisAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesButtonsColVisAsset',
 */

namespace p2m\assets\datatables;

class DataTablesButtonsColVisAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.5.6';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.colVis.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-TwrHEzXDg3dBmJ5hf4M5SONk47FzeIk2Hb5puVlc77bck+/qmKgxu8SR3hUn3VGk',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-buttons',
			'js' => [
				'js/buttons.colVis.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesButtonsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
