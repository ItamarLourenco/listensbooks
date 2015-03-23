<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Products'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'name',
                'categories.name',
                'synopsis',
                'preview',
                //'image',
                //'size',
                //'time:datetime',
                //'active',
                //'created_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
    ?>

</div>
