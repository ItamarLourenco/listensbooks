<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $nickname
 * @property string $email
 * @property string $status
 * @property string $created_at
 */
class Customers extends AppModel
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
            [['email'], 'unique'],
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
            'created_at' => 'Criado em',
        ];
    }


    /**
     * Get all Customer for create select in HTML
     * @param bool $empty
     * @return array
     */
    public static function getAllBySelect($empty = true)
    {
        $options = ArrayHelper::map(Customers::find()->limit(1000)->all(), 'id', 'nickname');
        if($empty){
            $options[''] = '--------';
            ksort($options);
        }
        return $options;
    }
}
