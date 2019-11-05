<?php
/**
 * ViAsset.php
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
 * @class \p2m\assets\locale\ViAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\ViAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\ViAsset',
 */

namespace p2m\assets\locale;

class ViAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'vi.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-H2ZxQpoI/Z6J0tx5sxES47lK/XTz2oHS2ykgutG53sSBi9gN+kaWuZIazzpfDpmE',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'vi.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}