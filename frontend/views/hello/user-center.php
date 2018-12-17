<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/14
 * Time: 9:58
 */

use frontend\components\forms\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(['id' => 'create-user',]); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => 20]) ?>
<?= $form->field($model, 'major')->timeInput() ?>

<?= $form->field($model, 'nickname')->passwordInput(['maxlength' => 20]) ?>

<?= $form->field($model, 'sex')->radioList(['1'=>'男','0'=>'女']) ?>

<?= $form->field($model, 'image_id')->dropDownList(['1'=>'大学','2'=>'高中','3'=>'初中'], ['prompt'=>'请选择','style'=>'width:200px']) ?>
<?= $form->field($model, 'tags')->dropDownList2(['1'=>'大学','2'=>'高中','3'=>'初中']) ?>
<?= $form->field($model, 'personalized_signature')->tagsInput() ?>

<?= $form->field($model, 'email')->imageInput() ?>

<?= $form->field($model, 'frend_link')->checkboxList(['0'=>'篮球','1'=>'足球','2'=>'羽毛球','3'=>'乒乓球']) ?>

<?= $form->field($model, 'hometown')->switchCheckbox() ?>

<?= $form->field($model, 'maxim')->textarea(['rows'=>3]) ?>

<?= $form->submitBtns() ?>

<?php ActiveForm::end(); ?>


<!--1. 富文本编辑器
2. input输入框带图标
3. 输入框默认值-->

<?php $this->beginBlock('select2'); ?>

<?php $this->endBlock(); ?>
<?php $this->registerJs($this->blocks['select2'], \yii\web\View::POS_END); ?>
