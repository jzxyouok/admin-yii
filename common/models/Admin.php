<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $admin_id
 * @property string $name
 * @property string $nick_name
 * @property string $password
 * @property string $avatar
 * @property string $summary
 * @property integer $recommend
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'nick_name', 'password', 'avatar', 'summary'], 'required'],
            [['recommend'], 'integer'],
            [['name', 'nick_name'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 32],
            [['avatar', 'summary'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'name' => 'Name',
            'nick_name' => '昵称',
            'password' => 'Password',
            'avatar' => '头像',
            'summary' => '简介',
            'recommend' => '推荐(0不推荐 1推荐)',
        ];
    }

    /**
     * @inheritdoc
     * @return AdminQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdminQuery(get_called_class());
    }
}
