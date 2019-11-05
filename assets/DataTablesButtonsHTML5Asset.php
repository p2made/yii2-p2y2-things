<?php
/**
 * DataTablesButtonsHTML5Asset.php
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
 * @class \p2m\assets\DataTablesButtonsHTML5Asset
 */

/**
 * Load this asset with...
 * p2m\assets\DataTablesButtonsHTML5Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\DataTablesButtonsHTML5Asset',
 */

namespace p2m\assets;

class DataTablesButtonsHTML5Asset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'datatables.net-buttons';

	protected $packageVersion = '1.6.1';

	protected $packageData = [
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
			'sourcePath' => '@npm/datatables.net-buttons',
			'js' => [
				'js/buttons.html5.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\DataTablesButtonsAsset',
		],
	];
}
