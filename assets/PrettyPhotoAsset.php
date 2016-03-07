<?php
/**
 * PrettyPhotoAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class PrettyPhotoAsset extends P2AssetBundle
{
	private $libVersion = '3.1.6';

	private $resourceData = array(
		'pub' => [
			'sourcePath' => '#/prettyPhoto_3.1.6',
			'css' => [
				'css/prettyPhoto.min.css',
			],
			'js' => [
				'js/jquery.prettyPhoto.min.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.jsdelivr.net/prettyphoto/' . $this->libVersion,
			'css' => [
				'css/prettyPhoto.min.css',
			],
			'js' => [
				'js/jquery.prettyPhoto.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
