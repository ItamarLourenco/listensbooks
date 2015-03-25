<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $created_at
 */
class Categories extends AppModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nome Categoria',
            'created_at' => 'Criado em',
        ];
    }

    /**
     * Get all Category for create select in HTML
     * @param bool $empty
     * @return array
     */
    public static function getAllBySelect($empty = true)
    {
        $options = ArrayHelper::map(Categories::find()->limit(1000)->all(), 'id', 'name');
        if($empty){
            $options[''] = '--------';
            ksort($options);
        }
        return $options;
    }

}
