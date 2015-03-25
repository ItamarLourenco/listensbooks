<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\helpers\Util;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Customers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Customers'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nickname',
            'email:email',
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function($data){
                    return Util::outputStatus($data->status);
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
