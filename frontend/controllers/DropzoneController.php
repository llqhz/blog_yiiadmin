<?php
/**
 * Created by PhpStorm.
 * User: llqhz
 * Date: 18-12-16
 * Time: 上午11:34
 */

namespace frontend\controllers;


use yii\web\Controller;

class DropzoneController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'view' => '@yiister/gentelella/views/error',
            ],
            'upload' => [
                'class' => 'twitf\dropzone\UploadAction',
                'config' => [
                    "filePathFormat" => "/uploads/image/".date('YmdHis').'/', //上传保存路径 返回给前台的路径
                    "fileRoot" => \Yii::getAlias('@webroot'),//上传的根目录
                ],
            ],
            'remove' => [
                'class' => 'twitf\dropzone\RemoveAction',
                'config' => [
                    "fileRoot" => \Yii::getAlias("@webroot"),//上传的根目录
                ],
            ],
        ];
    }
}