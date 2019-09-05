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

class P2AssetBundle extends \p2m\base\assets\P2AssetBase
{
	protected $p2mProjectId = 'yii2-p2y2-things';

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
		parent::__construct(true);
		if($bypass) return;

		// now get on with stuff...
		$allData = require_once('_assetsData.php');
		$this->assetData = $allData[$this->assetName];

		$this->setAssetVersion();
		$this->setPackageName();

		// Which pattern does the data use?
		switch ($this->assetData['pattern']) {
			case 'unpkg';
				$this->configureUnpkgAsset();
				break;
			case 'cdnjs';
				$this->configureCdnjsAsset();
				break;
			case 'moment';
				$this->configureMomentAsset();
				break;
			case 'vendor';
				$this->configureVendorAsset();
				break;
			default:
				$this->configureDefaultAsset();
		}
	}

	protected function configureBootstrapAsset()
	{
		// $baseUrl OR $sourcePath
		if(self::useStatic()) {
			$this->baseUrl = "https://stackpath.bootstrapcdn.com"
				. "/" . $this->packageName() . "/" . $this->assetVersion();
			if(isset($this->assetData['static']))
				$this->setYiiVariables($this->assetData['static']);
		}
		else {
			$this->sourcePath = "@npm/" . $this->packageName() . "/dist";
			if(isset($this->assetData['published']))
				$this->setYiiVariables($this->assetData['published']);
		}

		// Set any variables not already set
		$this->setYiiVariables($this->assetData);
	}
}
