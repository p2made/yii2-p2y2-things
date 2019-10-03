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

	public function __construct()
	{
		$name = $this->assetName;

		$data = [];

		$theme;

		/*
		$data = $this->assetData;
		*/
		if(!isset($this->assetData)) {
			$allData = require_once('_assetsData.php');
			$data = $allData[$this->assetName];
		}
		else {
			$data = $this->assetData;
			unset($this->assetData);
		}

		if($this->assetName == 'bootstrap')
			configureBootswatch($data, $theme);

		$package = function() use ($data, $name) {
			if(isset($data['package']))
				return $data['package'];
			return $name;
		};

		$version = function() use ($data) {
			if(isset($data['version']))
				return $data['version'];
			return null;
		};

		$useStatic = P2AssetsSettings::assetsUseStatic();
		//$useStatic = true;
		$branch = ($useStatic ? 'static' : 'published');
		$method = $data['pattern'] . '_' . $branch;

		$address = $this->{$method}($data, $package(), $version());
		/*
		$address = $this->{$method}($data,
		function() use ($data, $name) {
			if(isset($data['package']))
				return $data['package'];
			return $name;
		},
		function() use ($data) {
			if(isset($data['version']))
				return $data['version'];
			return null;
		});
		*/

		if ($useStatic)
			$this->baseUrl = $address;
		else
			$this->sourcePath = $address;

		if(isset($data[$branch])) {
			$temp = $data[$branch];
			$data = array_merge($data, $temp);
		}

		$yiiAttribs = [
			'css', 'cssOptions', 'js', 'jsOptions', 'publishOptions', 'depends'
		];

		foreach($yiiAttribs as $attrib) {
			if(!isset($this->{$attrib}) && isset($data[$attrib]))
				$this->{$attrib} = $data[$attrib];
		}
	}

	protected function unpkg_static($data, $package, $version)
	{
		return 'https://unpkg.com/' . $package . '@' . $version . $this->tail($data);
	}

	protected function unpkg_published($data, $package, $version)
	{
		return '@npm/' . $package . $this->tail($data);
	}

	protected function vendor_published($data, $package, $version)
	{
		return $data['sourcePath'];
	}

	protected function cdnjs_static($data, $package, $version)
	{
		return 'https://cdnjs.cloudflare.com/ajax/libs/' . $package . '/' . $version . $this->tail($data);
	}

	protected function cdnjs_published($data, $package, $version)
	{
		return $this->vendor_published($data, $package, $version);
	}

	protected function moment_static($data, $package, $version)
	{
		return $this->unpkg_static($data, $package, $version);
	}

	protected function moment_published($data, $package, $version)
	{
		return $this->unpkg_published($data, $package, $version);
	}

	private function bootstrap_static($data, $package, $version)
	{
		return 'https://stackpath.bootstrapcdn.com' . '/' . $package . '/' . $version;
	}

	private function bootstrap_published($data, $package, $version)
	{
		return $this->unpkg_published($data, $package, $version);
	}

	private function jquery_static($data, $package, $version)
	{
		return $data['baseUrl'];
	}

	private function jquery_published($data, $package, $version)
	{
		return $this->unpkg_published($data, $package, $version);
	}

	private function configureBootswatch(&$data, &$theme)
	{
		if(!isset(\Yii::$app->params['p2assets']['bootswatchTheme']))
			return;

		$theme = \Yii::$app->params['p2assets']['bootswatchTheme'];
		$data['pattern'] = 'bootswatch';
		$data['package'] = 'bootswatch';
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

	private function bootswatch_static($data, $package, $version)
	{
		return $this->bootstrap_static($data, $package, $version);
	}

	private function bootswatch_published($data, $package, $version)
	{
		return $this->unpkg_published($data, $package, $version);
	}

	protected function tail($data)
	{
		if(isset($data['tail']))
			return '/' . $data['tail'];
		return '';
	}
}
