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
 * @class \p2m\assets\base\P2AssetBundle
 */

return [
	'amplitudejs' => [
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
	], // Cdnjs
	'animate.css' => [
		'pattern' => 'unpkg',
		'version' => '3.7.2',
		'css' => [
			'animate.min.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'bootstrap' => [
		'pattern' => 'bootstrap',
		'version' => '4.3.1',
		'path' => 'dist',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'css/bootstrap.min.css'
		],
		'depends' => [
			'p2m\assets\base\P2BootstrapPluginAsset',
		],
	], // bootstrap
	'bootstrap-plugin' => [
		'pattern' => 'bootstrap',
		'pattern' => 'bootstrap',
		'package' => 'bootstrap',
		'version' => '4.3.1',
		'path' => 'dist',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'js/bootstrap.bundle.min.js'
		],
		'depends' => [
			'p2m\assets\base\P2YiiAsset',
		],
	], // bootstrap
	'bootstrap-switch' => [
		'pattern' => 'unpkg',
		'version' => '3.4.0',
		'path' => 'dist',
		'js' => [
			'js/bootstrap-switch.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'chart.js' => [
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
	], // NPM/Unpkg
	'circle-buttons' => [
		'pattern' => 'vendor',
		'sourcePath' => '@p2m/yii2-p2y2-things/vendor/lib',
		'css' => [
			'css/circle-buttons.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // ../vendor
	'ekko-lightbox' => [
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
	], // NPM/Unpkg
	'fitvids' => [ // Cdnjs
		'pattern' => 'cdnjs',
		'version' => '1.2.0',
		'sourcePath' => '@bower/fitvids',
		'static' => [
			'js' => [
				'jquery.fitvids.min.js'
			],
			'jsOptions' => [
				'integrity' => 'sha256-nA828blBCdUSSdI8jpciOZsf72IGt1eBcdx1ioEfa8o=',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'js' => [
				'jquery.fitvids.js'
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'flag-icon-css' => [
		'pattern' => 'unpkg',
		'version' => '2.8.0',
		'css' => [
			'css/flag-icon.min.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'gmaps.js' => [
		'pattern' => 'cdnjs',
		'version' => '0.4.25',
		'sourcePath' => '@bower/gmaps.js',
		'static' => [
			'jsOptions' => [
				'integrity' => 'sha256-7vjlAeb8OaTrCXZkCNun9djzuB2owUsaO72kXaFDBJs=',
				'crossorigin' => 'anonymous',
			],
		],
		'js' => [
			'gmaps.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\GMapsApiAsset',
		],
	], // Cdnjs
	'holder' => [
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
	], // Cdnjs
	'jquery' => [
		'pattern' => 'jquery',
		'version' => '3.4.1',
		'path' => 'dist',
		'baseUrl' => 'https://code.jquery.com',
		'sourcePath' => '@npm/jquery/dist',
		'static' => [
			'js' => [
				'jquery-3.4.1.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'js' => [
				'jquery.min.js',
			],
		],
	], // jquery
	'jquery-slim' => [
		'pattern' => 'jquery',
		'package' => 'jquery',
		'version' => '3.4.1',
		'path' => 'dist',
		'baseUrl' => 'https://code.jquery.com',
		'sourcePath' => '@npm/jquery/dist',
		'static' => [
			'js' => [
				'jquery-3.4.1.slim.min.js',
			],
			'jsOptions' => [
				'integrity' => 'sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh',
				'crossorigin' => 'anonymous',
			],
		],
		'published' => [
			'js' => [
				'jquery.slim.min.js',
			],
		],
	], // jquery
	'jquery.isotope' => [
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
	], // Cdnjs
	'jszip' => [
		'pattern' => 'unpkg',
		'version' => '3.2.2',
		'path' => 'dist',
		'js' => [
			'jszip.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'lightbox2' => [
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
	], // NPM/Unpkg
	'magnific-popup' => [
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
	], // NPM/Unpkg
	'masonry-layout' => [
		'pattern' => 'unpkg',
		'version' => '4.2.2',
		'path' => 'dist',
		'js' => [
			'masonry.pkgd.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'metismenu' => [
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
	], // NPM/Unpkg
	'morris.js' => [
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
	], // NPM/Unpkg
	'pdfmake' => [
		'pattern' => 'unpkg',
		'version' => '0.1.58',
		'path' => 'build',
		'js' => [
			'build'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'prettyPhoto' => [
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
	], // Cdnjs
	'raphael' => [
		'pattern' => 'unpkg',
		'version' => '2.3.0',
		'js' => [
			'raphael.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'scrollreveal' => [
		'pattern' => 'unpkg',
		'version' => '3.3.4',
		'path' => 'dist',
		'js' => [
			'scrollreveal.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'simple-line-icons' => [
		'pattern' => 'unpkg',
		'version' => '2.4.1',
		'css' => [
			'css/simple-line-icons.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'sweetalert' => [
		'pattern' => 'unpkg',
		'version' => '2.1.2',
		'path' => 'dist',
		'js' => [
			'sweetalert.min.js'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	], // NPM/Unpkg
	'timeline' => [
		'pattern' => 'vendor',
		'sourcePath' => '@p2m/yii2-p2y2-things/vendor/lib',
		'css' => [
			'css/timeline.min.css'
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\AnimateAsset',
		],
	], // ../vendor
	'timeline.css' => [
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
	], // Cdnjs
	'vfs_fonts' => [
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
	], // NPM/Unpkg
	'wow' => [
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
	], // Cdnjs
];
