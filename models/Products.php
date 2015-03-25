<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $name
 * @property string $synopsis
 * @property string $language
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
    const DIR_PRODUCTS = 'products';
    const DIR_IMAGES = 'images';

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
            [['status','language'], 'string'],
            [['image'], 'file'],
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
            'language' => 'Lingua',
            'synopsis' => 'Sinopse',
            'preview' => 'Preview',
            'image' => 'Imagem',
            'size' => 'Tamanho',
            'time' => 'Tempo',
            'status' => 'Ativo',
            'created_at' => 'Criado em',
        ];
    }

    /**
     * Get all Products for create select in HTML
     * @param bool $empty
     * @return array
     */
    public static function getAllBySelect($empty = true)
    {
        $options = ArrayHelper::map(Products::find()->limit(1000)->all(), 'id', 'name');
        if($empty){
            $options[''] = '--------';
            ksort($options);
        }
        return $options;
    }

    /**
     * Get path of directory of images producs
     * @param null $fileName
     * @return string
     */
    public static function getDirImage($fileName = null){
        return Yii::getAlias('@webroot') . DIRECTORY_SEPARATOR . Products::DIR_IMAGES . DIRECTORY_SEPARATOR . Products::DIR_PRODUCTS . DIRECTORY_SEPARATOR . $fileName;
    }

    /**
     * get url of images products
     * @param null $fileName
     * @return string
     */
    public static function getUrlImage($fileName = null){
        return Yii::getAlias('@web') . '/' . Products::DIR_IMAGES . '/' . Products::DIR_PRODUCTS . '/' . $fileName;
    }


}
