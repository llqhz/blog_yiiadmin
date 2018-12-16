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
$(()=>{
$('.select2_multiple').SumoSelect({
placeholder: '请选择选项',
selectAll: true,
search: true,
okCancelInMulti: true,
locale: ['确定','取消','全选'],
});

$('.tags_input').tagsInput({
width:'auto',
defaultText: '回车键确定'
});

$("input.flat").iCheck({
checkboxClass: "icheckbox_flat-green",
radioClass: "iradio_flat-green"
})


/**
* data-type: 'time'/'date'/'datetime'   指定类型
* data-range: 'true'/'~'   指定时间段分隔符
*/
layui.use('laydate', function(){
var laydate = layui.laydate;

$('.layer-datetime').each(function(index,el){
var range = false,type='datetime';
if ( el.dataset.range ) {
range = el.dataset.range;
if ( range == 'true' ) range='~';
}
if ( el.dataset.type ) {
type = el.dataset.type;
}
laydate.render({
elem: el,
type: type,     //
range: range,   // 或 range: '~' 来自定义分割字符
});
});

});

$('.picture-preview-input').on('change',function(event){
    var windowURL = window.URL || window.webkitURL;
    var img = windowURL.createObjectURL($(this)[0].files[0]);
    $(this).siblings('.picture-preview').css({backgroundImage:'url('+img+')'})
})

// custom.js框架已经初始化
//var a = Array.prototype.slice.call(document.querySelectorAll(".js-switch"));
//a.forEach(function(a) {
//    new Switchery(a, {
color: "#26B99A"
//    })
//})

})
<?php $this->endBlock(); ?>
<?php $this->registerJs($this->blocks['select2'], \yii\web\View::POS_END); ?>
