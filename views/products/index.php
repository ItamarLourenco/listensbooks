<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\helpers\Util;
use \app\helpers\Language;

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
                [
                    'attribute' => 'language',
                    'format' => 'text',
                    'value' => function($data){
                        return Language::getLanguage($data->language);
                    },
                ],
                'synopsis',
                'preview',
                [
                    'attribute' => 'status',
                    'format' => 'html',
                    'value' => function($data){
                        return Util::outputStatus($data->status);
                    },
                ],
                //'image',
                //'size',
                //'time:datetime',
                //'active',
                //'created_at',

                ['class' => 'yii\grid\ActionColumn',
                   'template'    => '{products_chapters} {view} {delete} {update}',
                    'buttons' => [
                        'products_chapters' => function ($url, $data) {
                            return Html::a('<span class="glyphicon glyphicon-subtitles"></span>', $url, [
                                'title' => Yii::t('app', 'New Action1'),
                            ]);
                        }
                    ],
                ]

            ],
        ]);
    ?>

</div>
