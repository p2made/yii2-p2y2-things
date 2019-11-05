<?php
/**
 * NbAsset.php
 *
 * Yii2 asset for 
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\locale\NbAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\NbAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\NbAsset',
 */

namespace p2m\assets\locale;

class NbAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'nb.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-332cVrx36ErCsIjQLi7nnlTLwKC1wF/IbKhk9odiZlANmqdKMLCNIwzSEdKMciaI',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'nb.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
