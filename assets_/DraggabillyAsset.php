<?php

namespace devleaks\metafizzy;

use yii\web\AssetBundle;

/**
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 */
class DraggabillyAsset extends AssetBundle
{
    public $sourcePath = '@bower/draggabilly/dist/';

    public $js = [
        'draggabilly.pkgd.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
