<?php
/**
 * DataTablesResponsiveBase.php
 *
 * Yii2 asset for DataTables Responsive
 * https://github.com/DataTables/Responsive
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesResponsiveBase
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\base\DataTablesResponsiveBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\base\DataTablesResponsiveBase',
 */

namespace p2m\assets\datatables;

class DataTablesResponsiveBase extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.2.2';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/responsive/##-version-##',
			'js' => [
				'js/dataTables.responsive.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-WmjKh59rjsRRNM/5JaBQlJs0BxXF70SCc474GZwpN4Q9+WFBKnih3MJAQ4steipY',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-responsive',
			'js' => [
				'js/dataTables.responsive.min.js',
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
