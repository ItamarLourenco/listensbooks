<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = Yii::t('app', 'Create Customers');
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-create">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nickname') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'status') ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
