<?php
/**
 * JqueryAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class JqueryAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/jquery/dist',
			'js' => [
				'jquery.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//code.jquery.com',
			'js' => [
				'jquery-2.2.1.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
