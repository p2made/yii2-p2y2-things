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

	public function __construct($bypass = false)
	{
		//parent::__construct(true);
		//if($bypass) return;

		// now get on with stuff...
		$this->setAssetData();

		$this->configureAssetByPattern($this->assetData['pattern']);
	}

	private function configureAssetByPattern($pattern = null)
	{
		if(!isset($pattern)) // default is everything already configured
			return;

		$package = function() {
			if(isset($this->assetData['package']))
				return $this->assetData['package'];

			return $this->assetName;
		}

		$configItem = function($name) {
			if(isset($this->assetData[$name]))
				return $this->assetData[$name];

			return null;
		}

		$jquery_baseUrl = function() {
			return $configItem('baseUrl');
		}

		$jquery_sourcePath = function() {
			return $unpkg_sourcePath();
		}

		$unpkg_baseUrl = function() {
			return 'https://unpkg.com/' . $package() . '@' . $configItem('version') . $tail();
		}

		$unpkg_sourcePath = function() {
			return '@npm/' . $package() . $tail();
		}

		$cdnjs_baseUrl = function() {
			return 'https://cdnjs.cloudflare.com/ajax/libs/'
				. $package() . '/' . $configItem('version') . $tail();
		}

		$cdnjs_sourcePath = function() {
			return $configItem('sourcePath');
		}

		$moment_baseUrl = function() {
			return $unpkg_baseUrl();
		}

		$moment_sourcePath = function() {
			return $unpkg_sourcePath();
		}

		$bootstrap_baseUrl = function() {
			return 'https://stackpath.bootstrapcdn.com'
				. '/' . $package() . '/' . $configItem('version');
		}

		$bootstrap_sourcePath = function() {
			return $unpkg_sourcePath;
		}

		$bootswatch_baseUrl = function() {
			return $bootstrap_baseUrl . '/' . self::bootswatchTheme();
		}

		$bootswatch_sourcePath = function() {
			return $unpkg_sourcePath . '/' . self::bootswatchTheme();
		}

		$vendor_sourcePath = function() {
			return $configItem('sourcePath');
		}

		$tail = function() {
			if(isset($this->assetData['path']))
				return '/' . $this->assetData['path'];
			return '';
		}

		if($pattern == 'bootstrap') {
			if(self::bootswatchTheme() && isset($this->assetData['css'])) {
				$pattern = 'bootswatch';
				$this->assetData['package'] = 'bootswatch';
				$hash = ;
				$this->assetData['static']['cssOptions']['integrity'] = $hash;
				$this->css = 'bootstrap.min.css';
			}
		}

		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T',
				'crossorigin' => 'anonymous',
			],
		],




		if(self::useStatic()) {
			$pattern .= '_' . 'baseUrl';
			$this->baseUrl = ${$pattern()};
			if(isset($this->assetData['static']))
				$this->setYiiVariables($this->assetData['static']);
		}
		else {
			$pattern .= '_' . 'sourcePath';
			$this->sourcePath = ${$pattern()};
			if(isset($this->assetData['published']))
				$this->setYiiVariables($this->assetData['published']);
		}

		$this->setYiiVariables($this->assetData);
	}

integrity="sha384-C++cugH8+Uf86JbNOnQoBweHHAe/wVKN/mb0lTybu/NZ9sEYbd+BbbYtNpWYAsNP" crossorigin="anonymous"

	private function configureBootstrapAsset()
	{
		$theme;

		$urlOrPath = function($theme, $isUrl = true) {
			if($isUrl)
				$result = ;
			else
				$result = '@npm/' . $this->packageName() . '/dist';

			if(!isset($theme))
				return $result;

			return $result . '/' . $theme;
		};

		$themed = isset(\Yii::$app->params['p2assets']['bootswatchTheme']);

		if($themed && $isCss) {
			$theme = \Yii::$app->params['p2assets']['bootswatchTheme'];
			$this->setPackageName('bootswatch');
			$this->css = 'bootstrap.min.css';
		};

		// $baseUrl OR $sourcePath
		if(self::useStatic()) {
			$this->baseUrl = $urlOrPath($theme);
			if(isset($this->assetData['static']))
				$this->setYiiVariables($this->assetData['static']);
		};
		else {
			$this->baseUrl = $urlOrPath($theme, false);
			if(isset($this->assetData['published']))
				$this->setYiiVariables($this->assetData['published']);
		};

		// Set any variables not already set
		$this->setYiiVariables($this->assetData);
	}



	private function setAssetData()
	{
		if(isset($this->assetData))
			return;

		$allData = require_once('_assetsData.php');
		$this->assetData = $allData[$this->assetName];
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
class P2AssetBase extends \yii\web\AssetBundle
{
	/*
	 * Configures an asset not described by a pattern.
	 * This should ONLY be on assets that are part of
	 * P2CoreAsset
	 */
	protected function configureDefaultAsset()
	{
		$this->setAssetVersion();

		// $baseUrl OR $sourcePath
		if(self::useStatic()) {
			$this->setYiiVariable($source, 'baseUrl');
			if(isset($this->assetData['static']))
				$this->setYiiVariables($this->assetData['static']);
		};
		else {
			$this->setYiiVariable($source, 'sourcePath');
			if(isset($this->assetData['published']))
				$this->setYiiVariables($this->assetData['published']);
		};

		$this->setYiiVariables($this->assetData);
	}

	// ##### ^ ##### UTILITY FUNCTIONS ##### ^ ##### //

	protected function assetVersion()
	{
		return $this->_version;
	}

	protected function insertAssetVersion(&$target)
	{
		if(isset($this->_version))
			$target = str_replace('##-version-##', $this->_version, $target);
	}

	protected function packageName()
	{
		return $this->_package;
	}

	/**
	 * Sets the variable named in $key
	 * if it is not already set & we have a value for it
	 */
	private function setYiiVariable($source, $key)
	{
		if(!isset($this->$key) && isset($source[$key]))
			$this->$key = $source[$key];
		$this->$key = $this->$key;
	}

	/**
	 * Performs setYiiVariable(...) on a block of variables
	 */
	private function setYiiVariables($source)
	{
		$this->setYiiVariable($source, 'css');
		$this->setYiiVariable($source, 'js');
		$this->setYiiVariable($source, 'cssOptions');
		$this->setYiiVariable($source, 'jsOptions');
		$this->setYiiVariable($source, 'publishOptions');
		$this->setYiiVariable($source, 'depends');
	}

	/**
	 * Returns common ending of paths where there is one
	 * @return string
	 * @default ''
	 */
	private function pathTail()
	{
		if(isset($this->assetData['path']))
			return '/' . $this->assetData['path'];
		return '';
	}
}
