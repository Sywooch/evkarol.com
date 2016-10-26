<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\admin\models\Categories;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Albums */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="albums-view">
    <br>
    
    <h1><?= Html::encode($this->title) ?></h1>

    <br>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <br>
    <?
    if($model->getImage()==true){
        $img=$model->getImage();
        $strMain="<img src='{$img->getUrl()}'>";
    }
    if($model->getImages()==true){
        $gallery=$model->getImages();
        $str='';
        foreach($gallery as $gal){
            if($gal->isMain==1)
                continue;
            $str.="<img class='gal' src='{$gal->getUrl('100x')}'>";
        }
    }
    ?>

<? ?>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

//                       'categories_id',
            [
                'attribute'=> 'categories_id',
                'value'=>  $model->categories->categories_name,

            ],
            'title',
            'album_text',
            'date',
            [
                'attribute'=>'image',
                'value'=>  $strMain ?  $strMain : 'Ничего нет',
                'format'=>'html',

            ],
            [
                'attribute'=>'gallery',
                'value'=> $str ? $str : 'Ничего нет',
                'format'=>'html',

            ],
            'text:html',
            [
                'attribute'=>'song',
                'value'=>$model->song,
//                    "<img src='../../../../web/audio/$model->song'>",
//                    $model->song,
//                    "<audio loop controls><source src='/web/audio/$model->song'></audio>",
                'format'=>'html',

            ],
        ],
    ]) ?>
  


</div>
