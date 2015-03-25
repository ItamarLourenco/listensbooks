<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\models\Products;
use \app\models\Customers;

/* @var $this yii\web\View */
/* @var $model app\models\Favorites */
/* @var $form ActiveForm */

$this->title = Yii::t('app', 'Create Favorites');
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="favorites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->dropDownList(Customers::getAllBySelect()) ?>
    <?= $form->field($model, 'product_id')->dropDownList(Products::getAllBySelect()) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
