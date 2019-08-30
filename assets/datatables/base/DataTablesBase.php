<?php
/**
 * DataTablesBase.php
 *
 * Yii2 asset for DataTables Bootstrap
 * https://www.datatables.net
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesBase
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\base\DataTablesBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\base\DataTablesBase',
 */

namespace p2m\assets\datatables;

class DataTablesBase extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.10.18';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/##-version-##',
			'js' => [
				'js/jquery.dataTables.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-r3v0/sXe5ocDydKBFcxP390rex2dEm9qN3Yv68S6uNX/F3b/RtMdGMUADZ8tabkz',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net',
			'js' => [
				'js/jquery.dataTables.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
