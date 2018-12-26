<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%user_qq}}".
 *
 * @property string $id 编号
 * @property string $openid openid
 * @property string $nickname 昵称
 * @property string $sex 性别
 * @property string $figureurl 空间头像
 * @property string $figureurl_qq_1 qq头像
 */
class UserQq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user_qq}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['openid', 'nickname'], 'string', 'max' => 50],
            [['sex'], 'string', 'max' => 4],
            [['figureurl', 'figureurl_qq_1'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'openid' => 'openid',
            'nickname' => '昵称',
            'sex' => '性别',
            'figureurl' => '空间头像',
            'figureurl_qq_1' => 'qq头像',
        ];
    }
}
