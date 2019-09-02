<?php
/**
 * P2UnpkgAssetBase.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-base
 * @class \p2m\base\assets\P2UnpkgAssetBase
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####										   ##### ^ #####
 * ##### ^ #####	  DO NOT USE THIS CLASS DIRECTLY!	  ##### ^ #####
 * ##### ^ #####										   ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

namespace p2m\base\assets;

/**
 * Load this asset with...
 * p2m\assets\base\P2UnpkgAssetBase::register($this);
 *
 * or specify as a dependency with...
 *	 'p2m\assets\base\P2UnpkgAssetBase',
 */
class P2UnpkgAssetBase extends \p2m\base\assets\P2AssetBase
{
	/*
	 * @var string
	 * public $sourcePath;
	 */

	/*
	 * @var string
	 * public $baseUrl;
	 */

	/*
	 * @var array
	 * public $depends;
	 */

	/*
	 * @var array
	 * public $js;
	 */

	/*
	 * @var array
	 * public $css;
	 */

	/*
	 * @var array
	 * public $jsOptions;
	 */

	/*
	 * @var array
	 * public $cssOptions;
	 */

	/*
	 * @var array
	 * public $publishOptions;
	 */

// ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	/*
	 * @var string
	 * private $packageName;
	 */
	protected $unpkgName;

	/*
	 * @var string
	 * private $packagePath;
	 */
	protected $unpkgPath;

	protected function configureAsset()
	{
		if(self::useStatic()) {
			$this->baseUrl = "https://unpkg.com/" . $this->unpkgName . "@" . $this->version;
			if (isset($this->unpkgPath)) {
				$this->baseUrl .= "/" . $this->unpkgPath;
			}
		}
		else {
			$this->sourcePath = "@npm/" . $this->unpkgName;
			if (isset($this->unpkgPath)) {
				$this->sourcePath .= "/" . $this->unpkgPath;
			}
		}
	}

	public function init()
	{
		parent::init();
	}
}
