<?php
namespace app\helpers;

use yii\helpers\Html;
use app\models\AppModel;

class Language extends Html
{
    const PT_BR = 'pt-BR';
    const EN = 'en';

    public static function getLanguage($language = null){
        $languages = array(Language::PT_BR => 'Português Brasil', Language::EN => 'Inglês');
        if($language != null){
            return $languages[$language];
        }
        return $languages;
    }
}
?>