<?php
/**
 * DataTablesButtonsColVisAsset.php
 *
 * Yii2 asset for DataTables
 * https://datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\DataTablesButtonsColVisAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesButtonsColVisAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesButtonsColVisAsset',
 */

namespace p2m\assets;

class DataTablesButtonsColVisAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-buttons';

	protected $packageVersion = '1.6.1';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.colVis.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-7bRJ6aqXBMYvsip3KZiArnrtxB1kiVwaWEgoVTyD1HBZMfrl3ho+Pg4mTeV6mNE/',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/datatables.net-buttons',
			'js' => [
				'js/buttons.colVis.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\DataTablesButtonsAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
