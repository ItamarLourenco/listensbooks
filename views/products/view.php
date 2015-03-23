<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \app\models\Categories;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php
        $model->status = Categories::getStatus($model->status);
        echo DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'name',
                'categories.name',
                'synopsis',
                'preview',
                'size',
                'time:datetime',
                'status',
                'created_at',
            ],
        ])
    ?>

</div>
