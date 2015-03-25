<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\AppModel;
use app\models\Categories;
use app\helpers\Language;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form ActiveForm */
$this->title = Yii::t('app', 'Create Products');
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'category_id')->dropDownList(Categories::getAllBySelect()) ?>
        <?= $form->field($model, 'language')->dropDownList(Language::getLanguage()) ?>
        <?= $form->field($model, 'synopsis')->textArea(['rows' => '6']) ?>
        <?= $form->field($model, 'status')->dropDownList(AppModel::getStatus()) ?>
        <?= $form->field($model, 'image')->fileInput() ?>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- product -->
