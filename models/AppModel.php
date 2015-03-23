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
class AppModel extends \yii\db\ActiveRecord {

    const STATUS = 'status';
    const STATUS_ACTIVE = 'active';
    const STATUS_DISABLED = 'disabled';

    public static function getStatus($get = null)
    {
        $status = [AppModel::STATUS_ACTIVE => 'Ativo', AppModel::STATUS_DISABLED => 'Inativo'];
        if($get == null){
            return $status;
        }
        return $status[$get];

    }
}