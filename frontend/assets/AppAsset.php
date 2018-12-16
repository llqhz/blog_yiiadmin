<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        // 矫正
        'css/main.css',
    ];
    public $js = [

    ];
    public $depends = [
        // 依赖在当前asset的js,css之前引入
        'frontend\assets\GentelellaAssets'
    ];
}
