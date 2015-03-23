<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'preview')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'size')->textInput() ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'active')->dropDownList([ 'active' => 'Active', 'disabled' => 'Disabled', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
