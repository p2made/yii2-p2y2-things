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

namespace p2m\assets; /* edit this if using elsewhere */

class ChartJsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '2.8.0';

	protected $resourceData = array(

		'static' => [
			'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/##-version-##',
			'css' => [
				'Chart.min.css',
			],
			'js' => [
				'Chart.min.js',
			],
			'cssOptions' => [
				'integrity' => 'sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha256-Uv9BNBucvCPipKQ2NS9wYpJmi8DTOEfTA/nH2aoJALw=',
				'crossorigin' => 'anonymous',
			],
		],

		'published' => [
			'sourcePath' => '@bower/chart.js/dist',
			'css' => [
				'Chart.min.css',
			],
			'js' => [
				'Chart.min.js',
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
