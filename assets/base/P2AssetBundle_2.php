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

use p2m\base\helpers\P2AssetsSettings;

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

	public $namedResult;

	public $baseUrl;

	public $sourcePath;

	public $css = [];

	public $cssOptions = [];

	public $js = [];

	public $jsOptions = [];

	public $publishOptions = [];

	public $depends = [];

	public function __construct()
	{
		$name = 'named_method';

		$this->namedResult = $this->named_method(19);

		$this->namedResult = $this->{$name}('wombat');
	}

	protected function named_method($input)
	{
		echo 'named_method was called with ' . $input . '.<br>';
		return 'the result of named_method with ' . $input;
	}
}
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
		$name = $this->assetName;

		$pattern;
		$package = $name;
		$version;
		$theme;

		$assetData = [];

		$yiiAttributes = [
			'css', 'cssOptions', 'js', 'jsOptions', 'publishOptions', 'depends'
		];

		if(!isset($this->assetData)) {
			$allData = require_once('_assetsData.php');
			$assetData = $allData[$this->assetName];
		}
		else {
			$assetData = $this->assetData;
		}

		if(isset($assetData['pattern']))
			$pattern = $assetData['pattern'];

		if(isset($assetData['package']))
			$package = $assetData['package'];

		if(isset($assetData['version']))
			$version = $assetData['version'];

		if($this->assetName == 'bootstrap')
			$this->configureBootswatch($theme, $pattern, $package);

		if(P2AssetsSettings::assetsUseStatic()) {
			$method = 'static';
			$pattern .= '_baseUrl';
			$this->baseUrl = $this->{$pattern}($assetData, $package, $version);
		}
		else {
			$method = 'published';
			$pattern .= '_sourcePath';
			$this->sourcePath = $this->{$pattern}($assetData, $package, $version);
		}

		if(isset($assetData[$method])) {
			$temp = $assetData[$method];
			$assetData = array_merge($assetData, $temp);
		}

		foreach($yiiAttributes as $attribute) {
			if(isset($assetData[$attribute]))
				$this->{$attribute} = $assetData[$attribute];
		}
	}

	protected function unpkg_baseUrl($data, $package, $version)
	{
		return 'https://unpkg.com/' . $package . '@' . $version . $this->tail;
	}

	protected function unpkg_sourcePath($data, $package, $version)
	{
		return '@npm/' . $package . $this->tail;
	}

	protected function vendor_sourcePath($data, $package, $version)
	{
		return $data['sourcePath'];
	}

	protected function cdnjs_baseUrl($data, $package, $version)
	{
		return 'https://cdnjs.cloudflare.com/ajax/libs/' . $package . '/' . $version . $this->tail;
	}

	protected function cdnjs_sourcePath($data, $package, $version)
	{
		return $this->vendor_sourcePath($data, $package, $version);
	}

	protected function moment_baseUrl($data, $package, $version)
	{
		return $this->unpkg_baseUrl($data, $package, $version);
	}

	protected function moment_sourcePath($data, $package, $version)
	{
		return $this->unpkg_sourcePath($data, $package, $version);
	}

	protected function tail($tail)
	{
		if(isset($data['tail']))
			return '/' . $data['tail'];
		return '';
	}

	private function bootstrap_baseUrl($data, $package, $version)
	{
		return 'https://stackpath.bootstrapcdn.com' . '/' . $package . '/' . $version;
	}

	private function bootstrap_sourcePath($data, $package, $version)
	{
		return $this->unpkg_sourcePath($data, $package, $version);
	}

	private function jquery_baseUrl($data, $package, $version)
	{
		return $data['baseUrl'];
	}

	private function jquery_sourcePath($data, $package, $version)
	{
		return $this->unpkg_sourcePath($data, $package, $version);
	}

	protected function bootswatch_baseUrl($data, $package, $version)
	{
		return $this->bootstrap_baseUrl($data, $package, $version);
	}

	protected function bootswatch_sourcePath($data, $package, $version)
	{
		return $this->unpkg_sourcePath($data, $package, $version);
	}

	private function configureBootswatch(&$theme, &$pattern, &$package)
	{
		if(!isset(\Yii::$app->params['p2assets']['bootswatchTheme']))
			return;

		$theme = \Yii::$app->params['p2assets']['bootswatchTheme'];
		$pattern = 'bootswatch';
		$package = 'bootswatch';
		$hashs = require_once('_bootswatchIntegrity.php');
		$hash = $hashs[$theme];
		$this->css = [
			'bootstrap.min.css'
		];
		$this->cssOptions = [
			'integrity' => $hash,
			'crossorigin' => 'anonymous',
		];
	}
}
