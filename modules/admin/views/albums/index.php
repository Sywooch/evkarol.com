<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Альбомы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="albums-index">
<br>
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <p>
        <?= Html::a('Создать альбом', ['create'], ['class' => 'btn btn-success']) ?>
    </p><br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
//            'categories_id',
        [
            'attribute'=> 'categories_id',
            'value'=> function($data){
              return $data->categories->categories_name;
            },

        ],
            'title',
            'album_text',
            'date',
            // 'img',
            //"img_album",
            // 'text:ntext',
            // 'audio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
