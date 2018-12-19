<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/18
 * Time: 19:47
 */

namespace frontend\components\tools\markdown;

use yii\web\AssetBundle;

class MarkdownAsset extends AssetBundle
{
    public $js = [
        'lib/editormd.min.js',
    ];

    public $css=[
        'css/editormd.min.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR.'/assets/';
        parent::init();
    }

    public function getLibPath()
    {
        return $this->baseUrl . '/lib/';
    }
}