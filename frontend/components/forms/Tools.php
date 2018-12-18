<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/17
 * Time: 18:06
 */

namespace frontend\components\forms;


use yii\web\UploadedFile;

class Tools
{
    public static function upload($model,$field)
    {
        $file = UploadedFile::getInstance($model,$field);
        if ( !$file ) {
            unset($model->$field);
            return;
        }

        if ( substr($file->type,0,5) == 'image' ) {
            $dir = 'images/';
        } else {
            $dir = 'files/';
        }
        $path = 'uploads/'.$dir.date('Ymd/His/').$file->baseName.'.'.$file->extension;
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0777, true);
        }
        // 这个函数有毒 是该php安装本身的问题
        $file->saveAs($path,false);
        //move_uploaded_file($path,$file->tempName);
        $model->$field = \Yii::getAlias('@web').'/'.$path;
    }
}