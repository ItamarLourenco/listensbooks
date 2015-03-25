<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\helpers\Util;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php
        $model->status = Util::outputStatus($model->status);
        echo DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'nickname',
                'email:email',
                'status:html',
                ['attribute' => 'created_at', 'format' => ['date', 'php:H:i:s d/m/Y'] ],
            ],
        ]);
    ?>

</div>
