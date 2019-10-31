<?php
/**
 * DataTablesAutoFillBase.php
 *
 * Yii2 asset for DataTables AutoFill
 * https://github.com/DataTables/AutoFill
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesAutoFillBase
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\base\DataTablesAutoFillBase::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\base\DataTablesAutoFillBase',
 */

namespace p2m\assets\datatables; /* edit this if using elsewhere */

class DataTablesAutoFillBase extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.3.3';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/autofill/##-version-##',
			'js' => [
				'js/dataTables.autoFill.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-iN8+KnIqtkyyzU4UH9OPOrrOtG9Kqi0vFBThjejzNS7z+x2ZSULfIxqdYq5Z+G/l',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@bower/datatables.net-autofill',
			'js' => [
				'js/dataTables.autoFill.min.js',
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
