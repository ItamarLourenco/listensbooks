<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Customers;
use app\models\Products;

/* @var $this yii\web\View */
/* @var $model app\models\Favorites */
/* @var $form ActiveForm */
$this->title = Yii::t('app', 'Update Favorites');
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="favorites-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::activeHiddenInput($model, 'id') ?>
    <?= $form->field($model, 'customer_id')->dropDownList(Customers::getAllBySelect()) ?>
    <?= $form->field($model, 'product_id')->dropDownList(Products::getAllBySelect()) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
