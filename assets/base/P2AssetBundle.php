<?php
/**
 * P2AssetBundle.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
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
	/*
	 * @var string
	 * protected $version;
	 */

	/*
	 * @var string
	 * protected $_p2mProjectId;
	 */
	protected $_p2mProjectId = 'yii2-p2y2-things';

	/*
	 * @var string
	 * protected $_assetData = [];
	 */
	//protected $_assetData = require_once('_assetsData.php');

	/**
	 * @var string
	 * public $baseUrl;
	 *
	 * @var string
	 * public $sourcePath;
	 *
	 * @var array
	 * public $css = [];
	 *
	 * @var array
	 * public $cssOptions = [];
	 *
	 * @var array
	 * public $js = [];
	 *
	 * @var array
	 * public $jsOptions = [];
	 *
	 * @var array
	 * public $depends = [];
	 *
	 * @var array
	 * public $publishOptions = [];
	 *
	 * @var boolean
	 * public $_useStatic = false;
	 *
	 * @var array | false
	 * public $_staticEnd = [] | false;
	 */


	public function __construct($abort = false)
	{
		if($abort) return;

		// now get on with stuff...
	}





}
