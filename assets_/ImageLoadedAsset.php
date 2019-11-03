<?php

namespace devleaks\metafizzy;

use yii\web\AssetBundle;

/**
 * Yii Asset Loader for imageloaded JavaScript library.
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 * @link http://http://imagesloaded.desandro.com/
 */

class ImageLoadedAsset extends AssetBundle {

    public $sourcePath = '@bower/imagesloaded';

    public $css = [];
    
    public $js = [
		'imagesloaded.pkgd.min.js'
	];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
