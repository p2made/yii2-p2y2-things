<?php

namespace devleaks\metafizzy;

use yii\web\AssetBundle;

/**
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 */
class PackeryAsset extends AssetBundle
{
    public $sourcePath = '@bower/packery/dist/';

    public $js = [
        'packery.pkgd.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
