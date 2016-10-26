<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Mail */

$this->title = 'Create Mail';
$this->params['breadcrumbs'][] = ['label' => 'Mails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mail-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
