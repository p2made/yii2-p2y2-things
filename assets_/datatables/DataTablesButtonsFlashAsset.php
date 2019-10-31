<?php
/**
 * DataTablesButtonsFlashAsset.php
 *
 * Yii2 asset for DataTables Buttons Flash
 * https://github.com/DataTables/Buttons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesButtonsFlashAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesButtonsFlashAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesButtonsFlashAsset',
 */

namespace p2m\assets\datatables;

class DataTablesButtonsFlashAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.5.6';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.flash.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-wSYm3f5KwqkbUyg1t+MTmmR9bfnkC0/8c5jXFDqjkOl9nAg5H0eS2Tx2Ca7dB8hk',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-buttons',
			'js' => [
				'js/buttons.flash.min.js',
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
