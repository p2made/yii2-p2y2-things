<?php
/**
 * DataTablesFixedHeaderAsset.php
 *
 * Yii2 asset for DataTables FixedHeader
 * https://github.com/DataTables/FixedHeader
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesFixedHeaderAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesFixedHeaderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesFixedHeaderAsset',
 */

namespace p2m\assets\datatables;

class DataTablesFixedHeaderAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.1.4';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/fixedheader/##-version-##',
			'css' => [
				'css/fixedHeader.bootstrap4.min.css',
			],
			'js' => [
				'js/fixedHeader.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-WCvWgurF5s3iQOhbC89lPn7E9F0QnmdzbG4MOluQuDFxCarl/3LXKgCeQKvjf+dF',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-FbRtTwmTNH3ZWe3jBaPPQqFTIDInWDgZrcConhcWKTgfZ4P32acCe5tOY0YabCcf',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-fixedheader-bs4',
			'css' => [
				'css/fixedHeader.bootstrap4.min.css',
			],
			'js' => [
				'js/fixedHeader.bootstrap4.min.js',
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
