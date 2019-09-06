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

	public function __construct()
	{
		$assetData;

		if(!isset($this->assetData)) {
			$allData = require_once('_assetsData.php');
			$assetData = (object)$allData[$this->assetName];
		}
		else {
			$assetData = (object)$this->assetData;
		}


	}

}
