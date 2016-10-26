<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Mail */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mail-view">

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
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'name',
            'email:email',
            'text:ntext',
            'date',
//            'status',
            [
                'attribute'=>'status',
                'value'=>  $model->status ? "<div class='success'>Прочитано</div>" : "<div class='danger'>Не прочитано</div>",
                'format'=>'html',

            ],
        ],
    ]) ?>

</div>
