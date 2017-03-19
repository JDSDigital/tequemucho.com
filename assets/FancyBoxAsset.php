<?php

namespace app\assets;

use yii\web\AssetBundle;

class FancyBoxAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancybox';
    public $baseUrl = '@web';

    public $css = ['dist/jquery.fancybox.min.css'];
    public $js = ['dist/jquery.fancybox.min.js'];
}