<?php
/**
 * ChartJsAsset.php
 *
 * Yii2 asset for Xxxxxxxxx
 * http://example.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\ChartJsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\ChartJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\ChartJsAsset',
 */

namespace p2m\assets;

class ChartJsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $_p2mProjectId = 'yii2-p2y2-project';

	protected $version = '2.8.0';

	protected $assetName = 'chart.js';

	protected $assetPath = 'dist';

	public $js = [
		'Chart.min.js'
	];

	public $css = [
		'Chart.min.css'
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];

	public function init()
	{
		$this->configureUnpkgAsset();
		parent::init();
	}
}
