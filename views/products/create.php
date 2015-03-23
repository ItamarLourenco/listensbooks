<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\AppModel;
use \app\models\Categories;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form ActiveForm */
?>
<div class="product">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'category_id')->dropDownList(Categories::getAllBySelect()) ?>
        <?= $form->field($model, 'image') ?>
        <?= $form->field($model, 'size') ?>
        <?= $form->field($model, 'time') ?>
        <?= $form->field($model, 'synopsis')->textArea(['rows' => '6']) ?>
        <?= $form->field($model, 'preview') ?>
        <?= $form->field($model, 'status')->dropDownList(AppModel::getStatus()) ?>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- product -->
