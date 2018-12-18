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
        $actions = [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'view' => '@yiister/gentelella/views/error',
            ],
            'upload' => [
                'class' => 'twitf\dropzone\UploadAction',
                'config' => [
                    "filePathFormat" => \Yii::getAlias('@web')."/uploads/image/".date('YmdHis').'/', //上传保存路径 返回给前台的路径
                    "fileRoot" => $_SERVER['DOCUMENT_ROOT'],//上传的根目录
                ],
            ],
            /*'remove' => [
                'class' => 'twitf\dropzone\RemoveAction',
                'config' => [
                    "fileRoot" => \Yii::getAlias("@webroot"),//上传的根目录
                ],
            ],*/
        ];
        return $actions;
    }

    public function actionRemove()
    {
        $url = \Yii::$app->request->post('url');
        if ( strpos($url,\Yii::getAlias('@web')) === false ) {
            $fileRoot = \Yii::getAlias('@webroot');
        } else {
            $fileRoot = $_SERVER['DOCUMENT_ROOT']; // 不带尾缀'/'
        }
        @unlink($fileRoot . $url);
        $filedir  = dirname($fileRoot . $url);
        $files = @scandir($filedir);
        if ( is_array($files) && count($files)<=2) {
            @rmdir($filedir);//如果是./和../,直接删除文件夹
        }
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return ['status'=>'success'];
    }


}