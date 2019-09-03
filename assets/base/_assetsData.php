<?php
/**
 * _assetsData.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2019
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 */

return [
	'amplitudejs' => [ // Cdnjs
		'pattern' => 'cdnjs',
		'version' => '5.0.2',
		'sourcePath' => '@bower/amplitude/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha256-/qGoEvr4VYrgei+olAkcHAuuwGFZb/AsO75x7xgsajs=',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'amplitude.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'animate.css' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '3.7.2',
		'css' => [
			'animate.min.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'chart.js' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '2.8.0',
		'path' => 'dist',
		'css' => [
			'Chart.min.css'
		],
		'js' => [
			'Chart.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'circle-buttons' => [ // ../vendor
		'pattern' => 'vendor',
		'sourcePath' => '@p2m/yii2-p2y2-things/vendor/pub',
		'css' => [
			'css/circle-buttons.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'ekko-lightbox' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '5.3.0',
		'path' => 'dist',
		'css' => [
			'ekko-lightbox.css'
		],
		'js' => [
			'ekko-lightbox.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'flag-icon-css' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '2.8.0',
		'css' => [
			'css/flag-icon.min.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'gmaps.js' => [ // Cdnjs
		'pattern' => 'cdnjs',
		'version' => '0.4.25',
		'sourcePath' => 'sourcePath',
		'static' => [
			'css' => [
				'asset.min.css'
			],
			'js' => [
				'asset.min.js'
			],
			'cssOptions' => [
				'cssOptions'
			],
			'jsOptions' => [
				'jsOptions'
			],
			'publishOptions' => [
				'publishOptions'
			],
		],
		'published' => [
			'css' => [
				'asset.min.css'
			],
			'js' => [
				'asset.min.js'
			],
			'cssOptions' => [
				'cssOptions'
			],
			'jsOptions' => [
				'jsOptions'
			],
			'publishOptions' => [
				'publishOptions'
			],
		],
		'css' => [
			'asset.min.css'
		],
		'js' => [
			'asset.min.js'
		],
		'cssOptions' => [
			'cssOptions'
		],
		'jsOptions' => [
			'jsOptions'
		],
		'publishOptions' => [
			'publishOptions'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'jszip' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '3.2.2',
		'path' => 'dist',
		'js' => [
			'jszip.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'scrollreveal' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '3.3.4',
		'path' => 'dist',
		'js' => [
			'scrollreveal.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'simple-line-icons' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '2.4.1',
		'css' => [
			'css/simple-line-icons.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'sweetalert' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '2.1.2',
		'path' => 'dist',
		'js' => [
			'sweetalert.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'timeline' => [ // ../vendor
		'pattern' => 'vendor',
		'sourcePath' => '@p2m/yii2-p2y2-things/vendor/pub',
		'css' => [
			'css/timeline.min.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\AnimateAsset',
		],
	],
	'wow' => [ // Cdnjs
		'pattern' => 'cdnjs',
		'version' => '1.1.2',
		'sourcePath' => '@bower/wow/dist',
		'path' => 'path',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'wow.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\AnimateAsset',
		],
	],
];

<script src="gmaps.min.js" integrity="sha256-7vjlAeb8OaTrCXZkCNun9djzuB2owUsaO72kXaFDBJs=" crossorigin="anonymous"></script>
{
	protected $version = '0.4.25';

	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/gmaps-##-version-##',
			'js' => [
				'gmaps.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs//##-version-##',
			'js' => [
				'gmaps.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\GMapsApiAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
