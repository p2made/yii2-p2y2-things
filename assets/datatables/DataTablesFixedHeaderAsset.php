<?php
/**
 * DataTablesFixedHeaderAsset.php
 *
 * Yii2 asset for DataTables FixedHeader
 * https://github.com/DataTables/FixedHeader
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
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
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
