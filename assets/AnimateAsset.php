<?php
/**
 * AnimateAsset.php
 *
 * Yii2 asset for Animate CSS
 * https://daneden.github.io/animate.css/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\AnimateAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\AnimateAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\AnimateAsset',
 */

namespace p2m\assets;

class AnimateAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '3.7.2';

	protected $resourceData = array(
		'static' => [
			'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/##-version-##',
			'css' => [
				'animate.min.css',
			],
			'cssOptions' => [
				'integrity' => 'sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@vendor/drmonty/animate.css',
			'css' => [
				'css/animate.min.css',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
?>
<?php
class _ExampleUnpkgAsset extends \p2m\base\assets\P2UnpkgAssetBase
{
	protected $_p2mProjectId = 'yii2-p2y2-project';

	protected $version = '0.0.0';

	protected $assetName = 'assetName';

	protected $assetPath = 'assetPath';

	public $depends = [
		'depends'
	];

	public $js = [
		'javascipt.min.js'
	];

	public $css = [
		'css'
	];

	public $jsOptions = [
		'jsOptions'
	];

	public $cssOptions = [
		'cssOptions'
	];

	public $publishOptions = [
		'publishOptions'
	];

	public function init()
	{
		$this->configureUnpkgAsset();
		parent::init();
	}
}
