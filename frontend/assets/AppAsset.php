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
        // 表单组件js初始化加载
        'js/main.js',
        //'https://cdnjs.cloudflare.com/ajax/libs/tui-editor/1.2.8/tui-editor-Editor.js'
    ];
    public $depends = [
        // 依赖在当前asset的js,css之前引入
        'frontend\assets\GentelellaAssets',
        //'frontend\components\tools\markdown\MarkdownAsset'
    ];

}
