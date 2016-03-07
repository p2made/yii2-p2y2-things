<?php
/**
 * P2AssetBundle.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class P2AssetBundle extends \yii\web\AssetBundle
{
	/**
	 * [$sourcePath description]
	 * @var string
	 */
	public $sourcePath = null;

	/**
	 * [$basePath description]
	 * @var string
	 */
	public $basePath = null;

	/**
	 * [$baseUrl description]
	 * @var string
	 */
	public $baseUrl = null;

	/**
	 * [$css description]
	 * @var array
	 */
	public $css = [];

	/**
	 * [$js description]
	 * @var array
	 */
	public $js  = [];

	/**
	 * [$depends description]
	 * @var array
	 */
	public $depends = [];

	private static $_cdnEnd;
	private static $_useCdn;

	protected function configureAsset($resourceData)
	{
		if(isset($resourceData['cssOptions'])) {
			$this->cssOptions = $resourceData['cssOptions'];
		}
		if(isset($resourceData['jsOptions'])) {
			$this->jsOptions = $resourceData['jsOptions'];
		}
		if(isset($resourceData['depends'])) {
			$this->depends = $resourceData['depends'];
		}

		if(P2AssetBundle::useCdn()) {
			$this->configureCdnAsset($resourceData);
		} elseif(P2AssetBundle::cdnEnd() !== false) {
		} else {
			$this->configurePubAsset($resourceData);
		}
	}

	protected function configurePubAsset($resourceData, $fallOut = false)
	{
		if(isset($resourceData['pub'])) {
			$thisData = $resourceData['pub'];
		} else { // no published asset data
			if($fallOut) {
				return;
			} else {
				$this->configureCdnAsset($resourceData, true);
			}
		}

		$thisPath = $thisData['sourcePath'];
		if(P2AssetBundle::cdnEnd()) {
			$this->baseUrl = str_replace('#/', P2AssetBundle::cdnEnd(), $thisPath);
		} else {
			$this->sourcePath = str_replace('#/', P2AssetBundle::ownPath(), $thisPath);
		}

		if(isset($thisData['css'])) {
			$this->css = $thisData['css'];
		}
		if(isset($thisData['js'])) {
			$this->js = $thisData['js'];
		}
	}

	protected function configureCdnAsset($resourceData, $fallOut = false)
	{
		if(isset($resourceData['cdn'])) {
			$thisData = $resourceData['cdn'];
		} else { // no CDN asset data
			if($fallOut) {
				return;
			} else {
				$this->configurePubAsset($resourceData, true);
			}
		}

		if(isset($thisData['baseUrl'])) {
			$this->baseUrl = $thisData['baseUrl'];
		}
		if(isset($thisData['css'])) {
			$this->css = $thisData['css'];
		}
		if(isset($thisData['js'])) {
			$this->js = $thisData['js'];
		}
	}

	protected static function useCdn()
	{
		if(isset($_useCdn)) { return $_useCdn; }

		// using 'p2made' as param space to allow for my other bits
		if(isset(\Yii::$app->params['p2made']['useCdn'])) {
			$_useCdn = \Yii::$app->params['p2made']['useCdn'];
		} else {
			$_useCdn = false;
		}

		return $_useCdn;
	}

	protected static function ownPath()
	{
		return '@vendor/p2made/yii2-p2y2-things/assets/lib/';
	}

	protected static function cdnEnd()
	{
		if(isset($_cdnEnd)) { return $_cdnEnd; }

		// using 'p2made' as param space to allow for my other bits
		if(isset(\Yii::$app->params['p2made']['cdnEnd'])) {
			$_cdnEnd = \Yii::$app->params['p2made']['cdnEnd'] . '/lib/';
		} else {
			$_cdnEnd = false;
		}

		return $_cdnEnd;
	}

/* --- asset template --- */
/*
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '',
			'css' => [
				'',
			],
			'js' => [
				'',
			],
		],
		'cdn' => [
			'baseUrl' => '',
			'css' => [
				'',
			],
			'js' => [
				'',
			],
		],
		'cssOptions' => [
		],
		'jsOptions' => [
		],
		'depends' => [
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
 */
}
