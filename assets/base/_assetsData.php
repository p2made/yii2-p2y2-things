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
		'sourcePath' => '@bower/gmaps.js',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha256-7vjlAeb8OaTrCXZkCNun9djzuB2owUsaO72kXaFDBJs=',
				'crossorigin' => 'anonymous',
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
		'js' => [
			'gmaps.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\GMapsApiAsset',
		],
	],
	'holder' => [ // Cdnjs
		'pattern' => 'cdnjs',
		'version' => '2.9.6',
		'sourcePath' => '@bower/holderjs',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha256-yF/YjmNnXHBdym5nuQyBNU62sCUN9Hx5awMkApzhZR0=',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'holder.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'jquery.isotope' => [ // Cdnjs
		'pattern' => 'cdnjs',
		'version' => '3.0.6',
		'sourcePath' => '@bower/isotope/dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'asset.min.js'
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
	'lightbox2' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '2.11.1',
		'path' => 'dist',
		'css' => [
			'css/lightbox.min.css'
		],
		'js' => [
			'js/lightbox.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'magnific-popup' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '1.1.0',
		'path' => 'dist',
		'css' => [
			'magnific-popup.css'
		],
		'js' => [
			'jquery.magnific-popup.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'masonry-layout' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '4.2.2',
		'path' => 'dist',
		'js' => [
			'masonry.pkgd.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'metismenu' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '3.0.4',
		'path' => 'dist',
		'css' => [
			'metisMenu.min.css'
		],
		'js' => [
			'metisMenu.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'morris.js' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '0.5.0',
		'css' => [
			'morris.css'
		],
		'js' => [
			'morris.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\RaphaelAsset',
		],
	],
	'pdfmake' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '0.1.58',
		'path' => 'build',
		'js' => [
			'build'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'prettyPhoto' => [ // Cdnjs
		'pattern' => 'cdnjs',
		'version' => '3.1.6',
		'sourcePath' => '@p2m/yii2-p2y2-things/vendor/prettyphoto-3.1.6',
		'static' => [
			'css' => [
				'css/prettyPhoto.min.css'
			],
			'js' => [
				'asset.min.js'
			],
			'cssOptions' => [
				'integrity' => 'sha256-9Sj5XFO4jLdh3Qeb6eoKXMEADGEiXUseIDIlVsZcehs=',
				'crossorigin' => 'anonymous',
			],
			'jsOptions' => [
				'integrity' => 'sha256-mWjIE4FAMgUEB4FhgndyTGeQoEULqnYtlaIU8x697zs=',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'css' => [
				'prettyPhoto.css'
			],
			'js' => [
				'jquery.prettyPhoto.js'
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'raphael' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'version' => '2.3.0',
		'js' => [
			'raphael.min.js'
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
	'timeline.css' => [ // Cdnjs
		'pattern' => 'cdnjs',
		'version' => '1.0.0',
		'sourcePath' => '@p2m/yii2-p2y2-things/vendor/Timeline.css-1.0.0/css',
		'static' => [
			'css' => [
				'timeline.min.css'
			],
			'cssOptions' => [
				'integrity' => 'sha256-LT2WEwbehWYhBvSyceJbc6WbIJxMp5k6Z1dNTPZt+pM=',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'css' => [
				'timeline.css'
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'vfs_fonts' => [ // NPM/Unpkg
		'pattern' => 'unpkg',
		'package' => 'pdfmake',
		'version' => '0.1.58',
		'path' => 'build',
		'js' => [
			'vfs_fonts.js.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	],
	'wow' => [ // Cdnjs
		'pattern' => 'cdnjs',
		'version' => '1.1.2',
		'sourcePath' => '@bower/wow/dist',
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
