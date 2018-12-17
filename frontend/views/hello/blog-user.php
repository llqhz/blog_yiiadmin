<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/17
 * Time: 14:23
 */


$this->title = '用户管理';

use frontend\components\forms\ActiveForm;
?>

<?php $form = ActiveForm::begin(['id' => 'update-user']); ?>

<?= $form->field($model,'name')->textInput() ?>

<?= $form->field($model, 'nickname')->textInput() ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<?= $form->field($model, 'headimgurl')->imageInput() ?>

<?= $form->field($model, 'email')->input('email') ?>

<?= $form->field($model,'sex')->radioList(['1'=>'男','2'=>'女','0'=>'未知']) ?>
<?= $form->field($model,'age')->input('number') ?>

<?= $form->field($model,'birthday')->timeInput() ?>

<?= $form->field($model,'privileges')->dropDownList2(['0'=>'普通用户','1'=>'普通管理员','2'=>'超级管理员']) ?>

<?= $form->field($model,'major')->checkboxList(['0'=>'科学','1'=>'艺术','2'=>'自然','3'=>'社会']) ?>

<?= $form->field($model,'education')->dropDownList(['1'=>'大学','2'=>'高中','3'=>'初中']) ?>

<?= $form->field($model,'subscribe')->switchCheckbox() ?>

<?= $form->field($model,'tags')->tagsInput() ?>

<?= $form->field($model, 'maxim')->textarea(['rows'=>3]) ?>

<?= $form->field($model,'album')->dropzone() ?>

<?= $form->field($model, 'introduction')->fileInput() ?>

<?= $form->submitBtns() ?>

<?php ActiveForm::end(); ?>

