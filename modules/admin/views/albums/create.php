<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Albums */

$this->title = 'Создать Альбом';
$this->params['breadcrumbs'][] = ['label' => 'Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="albums-create">

    <h1><?= Html::encode($this->title) ?></h1><br><br>
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
