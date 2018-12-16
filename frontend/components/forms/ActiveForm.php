<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/14
 * Time: 15:14
 */

namespace frontend\components\forms;

use yii\bootstrap\ActiveForm as YiiActiveForm;

class ActiveForm extends YiiActiveForm
{
    public $fieldClass = 'frontend\components\forms\ActiveField';

    public $fieldConfig = [
        'template' => "{label}\n{beginWrapper}\n{input}\n{error}\n{endWrapper}\n{hint}",  // 字段的模板
        'labelOptions' => ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'],  //修改label的样式
        'wrapperOptions' => [ 'class' => 'col-md-6 col-sm-6 col-xs-12' ],  // 外层div属性设置
        'inputOptions' => [ 'class' => 'form-control', ],       // 每个input标签的自带样式
    ];

    public $options = [ 'class' => 'form-horizontal',];


    public function submitBtns($buttons=['reset','submit'])
    {
        $btns = [
            'cancel' => '<button type="button" class="btn btn-primary">取 消</button>',
            'reset' => '<button type="reset"  class="btn btn-primary">重 置</button>',
            'submit' => '<button type="submit" class="btn btn-success">保 存</button>',
        ];
        $template = '<div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
               %s                
            </div>
        </div>';
        $btns = array_filter($btns,function($key, $val) use($buttons) {
            return true;
            //return array_key_exists($key, $buttons);
        }, ARRAY_FILTER_USE_BOTH);
        return sprintf($template,implode('',$btns));
    }


}