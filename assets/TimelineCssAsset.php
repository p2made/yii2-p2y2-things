<?php
/**
 * TimelineCssAsset.php
 *
 * Yii2 asset for Timeline CSS
 * https://github.com/christian-fei/Timeline.css
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\TimelineCssAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\TimelineCssAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\TimelineCssAsset',
 */

namespace p2m\assets;

class TimelineCssAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.0.0';

	protected $resourceData = [
		'static' => [
			'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/timeline.css/##-version-##',
			'css' => [
				'timeline.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha256-LT2WEwbehWYhBvSyceJbc6WbIJxMp5k6Z1dNTPZt+pM=',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@p2m/yii2-p2y2-things/vendor/Timeline.css-##-version-##/css',
			'css' => [
				'timeline.css',
			],
		],
	];

	public $depends = [
		'p2m\assets\P2CoreAsset'
	];

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
