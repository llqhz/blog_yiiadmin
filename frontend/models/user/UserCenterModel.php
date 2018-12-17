<?php
/**
 * Created by PhpStorm.
 * User: ZQ
 * Date: 2018/12/14
 * Time: 9:56
 */

namespace frontend\models\user;


use yii\db\ActiveRecord;

class UserCenterModel extends ActiveRecord
{
    // 指定表名
    public static function tableName()
    {
        return '{{%user_center}}';
    }


    // 设定表字段标题
    public function attributeLabels()
    {
        return [
            'name' => '姓名',
            'email' => '邮箱',
            'nickname' => '昵称',
            'sex' => '性别',
            'major' =>  '职业' ,
            'hometown' =>  '家乡',
            'mobile' =>  '手机号码',
            'maxim' =>  '座右铭' ,
            'personalized_signature' => '个性签名',
            'tags' => '个性标签',
            'frend_link' => '友情链接'
        ];
    }


}