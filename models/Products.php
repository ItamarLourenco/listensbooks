<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $name
 * @property string $sysnopsis
 * @property integer $category_id
 * @property string $preview
 * @property string $image
 * @property integer $size
 * @property integer $time
 * @property string $status
 * @property string $created_at
 */
class Products extends AppModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category_id'], 'required'],
            [['category_id', 'size', 'time'], 'integer'],
            [['status', 'image'], 'string'],
            [['created_at'], 'safe'],
            [['name', 'synopsis', 'preview'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'category_id' => 'Categoria',
            'synopsis' => 'Sinopse',
            'preview' => 'Preview',
            'image' => 'Imagem',
            'size' => 'Tamanho',
            'time' => 'Tempo',
            'status' => 'Ativo',
            'created_at' => 'Criado em',
        ];
    }
}
