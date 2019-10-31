<?php
/**
 * DataTablesButtonsAsset.php
 *
 * Yii2 asset for DataTables Buttons
 * https://github.com/DataTables/Buttons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesButtonsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesButtonsAsset',
 */

namespace p2m\assets\datatables;

class DataTablesButtonsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.5.6';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'css' => [
				'css/buttons.bootstrap4.min.css',
			],
			'js' => [
				'js/buttons.bootstrap4.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha384-OLZx0O9PR6mUkYxy5tjpEYCKNt+XHYFUgTNrjk6PikePywBxU9chg3Bw2iTDtt1U',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha384-D36Bd08fsynYPtpfHuAx5odG6zzSPqgA0DdnQK4ENUk4HKLMmSTXM61H2xx0Jhs0',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-buttons-bs4',
			'css' => [
				'css/buttons.bootstrap4.min.css',
			],
			'js' => [
				'js/buttons.bootstrap4.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\base\DataTablesButtonsBase',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
