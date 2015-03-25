<?php
namespace app\helpers;

use yii\helpers\Html;
use app\models\AppModel;

class Util extends Html
{
    public static function outputStatus($status)
    {
        if($status == AppModel::STATUS_ACTIVE){
            return "<span class='status active'>".AppModel::getStatus( AppModel::STATUS_ACTIVE )."</span>";
        }else if($status == AppModel::STATUS_DISABLED){
            return "<span class='status disabled'>".AppModel::getStatus( AppModel::STATUS_DISABLED )."</span>";
        }
    }
}
?>