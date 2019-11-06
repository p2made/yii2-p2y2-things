<?php
/**
 * IdAsset.php
 *
 * Yii2 asset for moment
 * https://momentjs.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\locale\IdAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\IdAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\IdAsset',
 */

namespace p2m\assets\locale;

class IdAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'moment';

	protected $packageVersion = '2.24.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/moment@##-version-##/locale',
		'sourcePath' => '@npm/moment/locale',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-zYo5mUMIRrbi9KYZkjFN/fBm7A3iyu4OA/2/PLqToQrWg+cMl0BX0CtelDs7c2KW',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'id.js',
		],
		'depends' => [
			'p2massets2CoreAsset',
		],
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
