<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории портфолио';
$this->params['breadcrumbs'][] = $this->title;
?><br>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1><br>

    <p>
        <?= Html::a('Добавить новую категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p><br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'categories_name',
            'descriptions',
            'keywords',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
