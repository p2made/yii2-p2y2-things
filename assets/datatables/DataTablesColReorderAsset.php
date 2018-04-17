<?php
/**
 * DataTablesColReorderAsset.php
 *
 * Yii2 asset for DataTables ColReorder
 * https://github.com/DataTables/ColReorder
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesColReorderAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesColReorderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesColReorderAsset',
 */

namespace p2m\assets\datatables;

class DataTablesColReorderAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
