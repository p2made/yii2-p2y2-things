<?php
/**
 * SweetAlertAsset.php
 *
 * Yii2 asset for SweetAlert
 * https://sweetalert.js.org
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\SweetAlertAsset
 */

/**
 * Load this asset with...
 * p2m\assets\SweetAlertAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\SweetAlertAsset',
 */

namespace p2m\assets;

class SweetAlertAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'sweetalert';

	protected $packageVersion = '2.1.2';

	protected $packageData = [
		'static' => [
			'baseUrl' => 'https://cdn.jsdelivr.net/npm/sweetalert@##-version-##/dist',
			'js' => [
				'sweetalert.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-RIQuldGV8mnjGdob13cay/K1AJa+LR7VKHqSXrrB5DPGryn4pMUXRLh92Ev8KlGF',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'sourcePath' => '@npm/sweetalert/dist',
			'js' => [
				'sweetalert.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	];
}
