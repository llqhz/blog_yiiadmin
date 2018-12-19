<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/18
 * Time: 19:45
 */

namespace frontend\components\tools\markdown;


use yii\bootstrap\Html;
use yii\widgets\InputWidget;

class EditorMarkdown extends InputWidget
{


    /**
     * @var \yii\widgets\ActiveField active input field, which triggers this widget rendering.
     * This field will be automatically filled up in case widget instance is created via [[\yii\widgets\ActiveField::widget()]].
     * @since 2.0.11
     */
    public $field;
    /**
     * @var Model the data model that this widget is associated with.
     */
    public $model;
    /**
     * @var string the model attribute that this widget is associated with.
     */
    public $attribute;
    /**
     * @var string the input name. This must be set if [[model]] and [[attribute]] are not set.
     */
    public $name;
    /**
     * @var string the input value.
     */
    public $value;
    /**
     * @var array the HTML attributes for the input tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    public $inputName = '';

    public $libPath = '';

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
//        if ($this->name === null && !$this->hasModel()) {
//            throw new InvalidConfigException("Either 'name', or 'model' and 'attribute' properties must be specified.");
//        }
//        if (!isset($this->options['id'])) {
//            $this->options['id'] = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
//        }
        $this->initInputName();
        $this->registerAssets();
        parent::init();
    }

    /**
     * @return bool whether this widget is associated with a data model.
     */
//    protected function hasModel()
//    {
//        return $this->model instanceof Model && $this->attribute !== null;
//    }

    /**
     * 初始化inputName
     */
    public function initInputName(){
        if ($this->hasModel()){
            $this->inputName= Html::getInputName($this->model, $this->attribute);
        }
    }


    public function run()
    {
        $this->registerScript();
        $options = array_merge([
                //'cols' => '30',
                //'rows' => '10',
                'class' => 'hidden'
            ],$this->options,['id'=>null]);
        $wrapperOptions = [
            'id' => $this->options['id'],
            'class' => 'editor-md',
        ];
        $value = Html::getAttributeValue($this->model,$this->attribute);
        $textarea = Html::textarea($this->inputName, $value, $options);
        return Html::tag('div',$textarea,$wrapperOptions);
    }

    public function registerAssets()
    {
        $assetsObj = MarkdownAsset::register($this->view);
        $this->libPath = $assetsObj->getLibPath();
    }

    public function registerScript()
    {
        $options = [
            'id' => $this->options['id'],
            'width' => "90%",
            'height' => 640,
            'syncScrolling' => "single",
            'path' => $this->libPath,
        ];
        $js = '$(()=>editormd( '. json_encode($options) .' ))';
        $this->getView()->registerJs($js);
    }



}