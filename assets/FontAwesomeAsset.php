<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Font awesome asset
 */
class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';

    public $css = [
        'css/font-awesome.min.css'
    ];
}
