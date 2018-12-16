<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/11
 * Time: 15:56
 */

namespace frontend\controllers;


use frontend\models\hello\UploadTest;
use frontend\models\user\UserCenterModel;
use yii\web\Controller;

class HelloController extends Controller
{

    // 定义当前控制器的布局
    public $layout = 'gentelella';

    public function actionHello()
    {
        return $this->render('hello');
    }

    public function actionSay()
    {

//        $res = UserCenterModel::findAll(true);
//        var_dump($res);
//        die();
        if ( $res = \Yii::$app->request->post() ) {

            new \yii\bootstrap\ActiveField();

            var_dump($res);
            return;
        }

        return $this->render('say');
    }

    public function actionForm()
    {
        $model = new UploadTest();
        $assign = [
            'model' => $model,
        ];
        return $this->render('form',$assign);
    }

    public function actionUserCenter()
    {
        if ( $res = \Yii::$app->request->post() ) {

            var_dump($res);
            return;
        }
        $model = new UserCenterModel();
        $assign = [
            'model' => $model,
        ];
        return $this->render('user-center', $assign);
    }


    public function actionHappy()
    {
        \Yii::$app->session->setFlash('success','信息修改成功 ! 自定义消息提示 ~');
        \Yii::$app->session->setFlash('error','信息修改失败 ! 自定义消息提示 ~');
        return $this->render('happy');
    }

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