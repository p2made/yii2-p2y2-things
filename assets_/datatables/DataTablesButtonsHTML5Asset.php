<?php
/**
 * DataTablesButtonsHTML5Asset.php
 *
 * Yii2 asset for DataTables Buttons HTML5 Export
 * https://github.com/DataTables/Buttons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesButtonsHTML5Asset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesButtonsHTML5Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesButtonsHTML5Asset',
 */

namespace p2m\assets\datatables;

class DataTablesButtonsHTML5Asset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.5.6';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.html5.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-Pl8RVCqSvsApnng2TEtrl1lHWlEozdPYTpk35W5LeFsrUsPk64XprIZXQOUq4hGj',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-buttons',
			'js' => [
				'js/buttons.html5.min.js',
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
