<?php

namespace devleaks\metafizzy;

use yii\web\AssetBundle;

/**
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 */
class MasonryAsset extends AssetBundle
{
    public $sourcePath = '@bower/masonry/dist/';

    public $js = [
        'masonry.pkgd.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
