<?php
/**
 * P2FontAwesomeAsset.php
 *
 * Yii2 asset for Font Awesome
 * http://fontawesome.io/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2FontAwesomeAsset
 * @license MIT
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2FontAwesomeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2FontAwesomeAsset',
 */

namespace p2m\assets\base;

class P2FontAwesomeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '5.8.2';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://use.fontawesome.com/releases/v##-version-##',
			'css' => [
				'css/all.css',
			],
			'cssOptions' => [
				'integrity' => 'sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@vendor/fortawesome/font-awesome',
			'css' => [
				'css/all.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay',
				'crossorigin' => 'anonymous',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
