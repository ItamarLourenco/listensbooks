<?php

use yii\helpers\Html;
use app\helpers\Util    ;
use yii\widgets\DetailView;
use app\models\Categories;
use app\helpers\Language;
use app\models\Products;

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
        $model->status = Util::outputStatus($model->status);
        $model->language = Language::getLanguage($model->language);
        $model->image = Products::getUrlImage($model->image);
        echo DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'name',
                'categories.name',
                'language',
                'synopsis',
                'preview',
                'size',
                'time',
                'status:html',
                'image:image',
                ['attribute' => 'created_at', 'format' => ['date', 'php:H:i:s d/m/Y']]
            ],
        ])
    ?>

</div>
