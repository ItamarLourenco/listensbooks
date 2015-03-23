<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $nickname
 * @property string $email
 * @property string $status
 * @property string $created_at
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['status'], 'string'],
            [['created_at'], 'safe'],
            [['nickname', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nickname' => 'Como gostaria de ser chamado',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
