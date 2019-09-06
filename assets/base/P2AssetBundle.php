<?php
/**
 * P2AssetBundle.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2AssetBundle
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

namespace p2m\assets\base;

class P2AssetBundle extends \yii\web\AssetBundle
{
	protected $p2mProjectId = 'yii2-p2y2-things';

	/*
	 * @var string
	 * protected $assetName;
	 * The simple name of the asset.
	 * Usually the same as $_packageName
	 */
	protected $assetName;

	/*
	 * @var array
	 * protected $assetData;
	 */
	protected $assetData = [];

// ##### ^ ##### ^ Private Variables ^ ##### ^ #####

	/*
	 * @var string
	 * private $_version;
	 */
	private $_version; // = '0.0.0'

	/*
	 * @var string
	 * protected $_packageName;
	 * The simple name of the package that the asset is built on
	 * Usually the same as $assetName
	 */
	private $_package;

	/*
	 * @var boolean
	 * private $_useStatic = false;
	 */
	private static $_useStatic;

	/*
	 * @var array | false
	 * private $_assetsEnd = false;
	 */
	private static $_assetsEnd;

	private static $_theme;

	/*
	 * @var bool | false
	 * private $_assetsEnd = false;
	 */
	private static $_aliasSet = false;

	/**
	protected $p2mProjectId = 'yii2-p2y2-base';

	protected $assetName;

	protected $assetData = [];
	 */

	/**
	public $baseUrl;

	public $sourcePath;

	public $css = [];

	public $js = [];

	public $cssOptions = [];

	public $jsOptions = [];

	public $publishOptions = [];

	public $depends = [];
	 */

	/**
	private $_version; // = '0.0.0'

	private $_package;

	private static $_useStatic;

	private static $_assetsEnd;

	private static $_aliasSet = false;
	 */

	/**
		*** protected functions ***

		$this->configureDefaultAsset()

		$this->configureUnpkgAsset()

		$this->configureCdnjsAsset()

		$this->configureMomentAsset()

		$this->configureVendorAsset()

		$this->assetVersion()

		$this->packageName()

		$this->setAssetVersion()

		$this->setPackageName()

		$this->insertAssetVersion(&$target)
	 */

	/**
		*** private functions ***

		$this->setUnpkgPath()

		$this->setYiiVariable($source, $key)

		$this->setYiiVariables($source)

		$this->pathTail()
	 */

	/**
		*** private static functions ***

		self::setP2mAlias()

		self::useStatic()

		self::assetsEnd()
	 */

	public function __construct()
	{
		$this->setAssetData();

		if(!isset($pattern)) // default is everything already configured
			return;

		if($pattern == 'bootstrap' && self::bootswatchTheme() && isset($this->assetData['css'])) {
			/**
			 * If all these conditions are met we have a few things to do
			 */
			$pattern = 'bootswatch';
			$this->assetData['package'] = 'bootswatch';
			$allHashs = require_once('_bootswatchIntegrity.php');
			$hash = $allHashs[self::bootswatchTheme()];
			$this->assetData['static']['cssOptions']['integrity'] = $hash;
			$this->css = 'bootstrap.min.css';
		}

		if(self::useStatic()) {
			$pattern = 'baseUrl_' . $pattern;
			$this->baseUrl = $this->$pattern();
			if(isset($this->assetData['static']))
				$this->setYiiVariables($this->assetData['static']);
		}
		else {
			$pattern = 'sourcePath_' . $pattern;
			$this->sourcePath = $this->$pattern();
			if(isset($this->assetData['published']))
				$this->setYiiVariables($this->assetData['published']);
		}

		$this->setYiiVariables($this->assetData);
	}

	private function setAssetData()
	{
		if(isset($this->assetData))
			return;

		$allData = require_once('_assetsData.php');
		$this->assetData = $allData[$this->assetName];
	}

	private function setYiiVariables($source)
	{
		$keyList = [
			'css', 'js', 'cssOptions', 'jsOptions', 'publishOptions', 'depends'
		];

		foreach($keyList as $key) {
			if(!isset($this->$key) && isset($source[$key]))
				$this->$key = $source[$key];
		}
	}

	private function package()
	{
		if(isset($this->assetData['package']))
			return $this->assetData['package'];

		return $this->assetName;
	}

	private function dataItem($name)
	{
		if(isset($this->assetData[$name]))
			return $this->assetData[$name];

		return null;
	}

	private function baseUrl_bootstrap()
	{
		return 'https://stackpath.bootstrapcdn.com'
			. '/' . $this->package() . '/' . $this->dataItem('version');
	}

	private function sourcePath_bootstrap()
	{
		return $this->sourcePath_unpkg;
	}

	private function baseUrl_jquery()
	{
		return $this->dataItem('baseUrl');
	}

	private function sourcePath_jquery()
	{
		return $this->sourcePath_unpkg();
	}

	private function baseUrl_unpkg()
	{
		return 'https://unpkg.com/' . $this->package()
			. '@' . $this->dataItem('version') . $this->tail();
	}

	private function sourcePath_unpkg()
	{
		return '@npm/' . $this->package() . $this->tail();
	}

	private function baseUrl_cdnjs()
	{
		return 'https://cdnjs.cloudflare.com/ajax/libs/' . $this->package()
			. '/' . $this->dataItem('version') . $this->tail();
	}

	private function sourcePath_cdnjs()
	{
		return $this->sourcePath_vendor();
	}

	private function sourcePath_vendor()
	{
		return $this->dataItem('sourcePath');
	}

	private function baseUrl_bootswatch()
	{
		return $this->bootstrap_baseUrl . '/' . self::bootswatchTheme();
	}

	private function sourcePath_bootswatch()
	{
		return $this->sourcePath_unpkg . '/' . self::bootswatchTheme();
	}

	private function baseUrl_moment()
	{
		return $this->baseUrl_unpkg();
	}

	private function sourcePath_moment()
	{
		return $this->sourcePath_unpkg();
	}

	private function tail()
	{
		if(isset($this->assetData['path']))
			return '/' . $this->assetData['path'];
		return '';
	}

	/**
	 * Get useStatic setting - use static resources
	 * @return boolean
	 * @default false
	 */
	private static function setP2mAlias()
	{
		if(!self::$_aliasSet)
			return;
		\Yii::setAlias('@p2m', '@vendor/p2made');
		self::$_aliasSet = true;
	}

	/**
	 * Get useStatic setting - use static resources
	 * @return boolean
	 * @default false
	 */
	private static function useStatic()
	{
		if(!isset(self::$_useStatic))
			self::$_useStatic = P2AssetsSettings::assetsUseStatic();
		return self::$_useStatic;
	}

	/**
	 * Get assetsEnd setting - static application end
	 * @return array | false
	 * @default false
	 */
	private static function assetsEnd()
	{
		if(!isset(self::$_assetsEnd))
			self::$_assetsEnd = P2AssetsSettings::assetsStaticEnd();
		return self::$_assetsEnd;
	}

	private static function bootswatchTheme()
	{
		if(!isset(self::$_theme)) {
			self::$_theme = isset(\Yii::$app->params['p2assets']['bootswatchTheme'])
				? \Yii::$app->params['p2assets']['bootswatchTheme']
				: false;
		}

		return self::$_theme;
	}
}
