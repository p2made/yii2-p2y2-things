<?php
/**
 * DataTablesFixedHeaderAsset.php
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
 * @class \p2m\assets\DataTablesFixedHeaderAsset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesFixedHeaderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesFixedHeaderAsset',
 */

namespace p2m\assets;

class DataTablesFixedHeaderAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-fixedheader-bs4';

	protected $packageVersion = '3.1.6';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/fixedheader/##-version-##',
			'css' => [
				'css/fixedHeader.bootstrap4.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha384-WCvWgurF5s3iQOhbC89lPn7E9F0QnmdzbG4MOluQuDFxCarl/3LXKgCeQKvjf+dF',
				'crossorigin' => 'anonymous',
			],
			'js' => [
				'js/dataTables.fixedHeader.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-VV9XTKsetrgeqI0VoycV3KK+hl6EuEKK2R3R2O6aMGbkOHerC7uvY86DuVYyWLHn',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/datatables.net-fixedheader-bs4',
			'css' => [
				'css/fixedHeader.bootstrap4.min.css',
			],
			'js' => [
				'js/fixedHeader.bootstrap4.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\DataTablesAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
