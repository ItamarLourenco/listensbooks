<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\AppModel;


/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = Yii::t('app', 'Create Customers');
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nickname') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'status')->dropDownList(AppModel::getStatus()) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
