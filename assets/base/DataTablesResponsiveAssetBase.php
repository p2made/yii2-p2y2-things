<?php
/**
 * DataTablesResponsiveBase.php
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
 * @class \p2m\assets\base\DataTablesResponsiveBase
 */

/**
 * Load this asset with...
 * p2m\assets\base\DataTablesResponsiveBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\DataTablesResponsiveBase',
 */

namespace p2m\assets\base;

class DataTablesResponsiveBase extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-responsive';

	protected $packageVersion = '2.2.3';

	protected $packageData = [
		'baseUrl' => 'https://cdn.datatables.net/responsive/##-version-##',
		'sourcePath' => '@npm/datatables.net-responsive',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-utW62Q5udTycRsqDMdQwjeaKASTAE2cf20juuz5yfC1n1hu8gBJ1Pn0oEzKIb8Gd',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'js/dataTables.responsive.min.js',
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
