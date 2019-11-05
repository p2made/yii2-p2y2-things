<?php
/**
 * XPseudoAsset.php
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
 * @class \p2m\assets\locale\XPseudoAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\XPseudoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\XPseudoAsset',
 */

namespace p2m\assets\locale;

class XPseudoAsset extends \p2m\assets\locale\base\MomentAssetBase
{
	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
			'js' => [
				'x-pseudo.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-BKocvUn2kkJ06YQyh1jP1xkHrc80lk5Rz2odTJFVPuHlqRaOQVsZMocNpwt11L+C',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/moment/locale',
			'js' => [
				'x-pseudo.js',
			],
		],
		'depends' => [
			'p2m\assets\locale\P2CoreAsset',
		],
	];
}
