<?php
/**
 * DataTablesButtonsBase.php
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
 * @class \p2m\assets\base\DataTablesButtonsBase
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\DataTablesButtonsBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\DataTablesButtonsBase',
 */

namespace p2m\assets\base;

class DataTablesButtonsBase extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-buttons';

	protected $packageVersion = '1.6.1';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/dataTables.buttons.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-VN/74A9zRhPrbgZ1tJ4dzGabANCIhsrKx6v6iXVFh5SIy6noRPJ+otLRTwJ260hq',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/datatables.net-buttons',
			'js' => [
				'js/dataTables.buttons.min.js',
			],
		],
		'depends' => [
			'p2m\assets\base\P2CoreAsset',
			'p2m\assets\DataTablesAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
