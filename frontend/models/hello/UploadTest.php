<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/13
 * Time: 18:37
 */

namespace frontend\models\hello;


use yii\base\Model;

class UploadTest extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            // $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}