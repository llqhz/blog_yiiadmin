<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/13
 * Time: 18:40
 */

use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>

<?= $form->field($model, 'file')->widget('twitf\dropzone\DropZone', [
    //开启拖拽排序 
    'sortable'=>true,
    'clientOptions' => [
        // 'url'=> \yii\helpers\Url::toRoute('hello/form'),
        'maxFilesize' => '6',
        'autoProcessQueue'=>true,
        'dictCancelUpload'=>'取消上传',
        'dictRemoveFile'=>'删除文件',
        'addRemoveLinks'=>true,
    ],
]) ?>


<button>Submit</button>

<?php ActiveForm::end() ?>
