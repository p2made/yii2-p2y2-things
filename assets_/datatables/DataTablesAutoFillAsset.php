<?php
/**
 * DataTablesAutoFillAsset.php
 *
 * Yii2 asset for DataTables AutoFill
 * https://github.com/DataTables/AutoFill
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesAutoFillAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesAutoFillAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesAutoFillAsset',
 */

namespace p2m\assets\datatables; /* edit this if using elsewhere */

class DataTablesAutoFillAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.3.3';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/autofill/##-version-##',
			'css' => [
				'css/autoFill.bootstrap4.min.css',
			],
			'js' => [
				'js/autoFill.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-UQiYV506lsxVwwSgMRYrON2zHOJRxal00n3itqC8DoX7QzokQyQ/0ZMZVMvcc/2T',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-ve+9IYl+b4Xe2YHsHn+EfUNo2uUyvLX7RtvuRViSXsY76AaPCRzKR3r0Vd19Z9uN',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-autofill-bs4',
			'css' => [
				'css\autoFill.bootstrap4.min.css',
			],
			'js' => [
				'js\autoFill.bootstrap4.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\base\DataTablesAutoFillBase',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
