<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Albums */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="albums-form">



    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<? echo $form->field($model, 'categories_id')->dropdownList(\yii\helpers\ArrayHelper::map(\app\modules\admin\models\Categories::find()->all(),
    'id','categories_name'));
    ?>



    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'album_text')->textInput(['maxlength' => true]) ?>

    <? $img=$model->getImage();
    $gallery=$model->getImages();
    ?>


  <img src="<?=$img->getUrl()?>">

    <? if($img->filePath != 'no-image.png'):?>
    <?= Html::a('Удалить', ['deleteimg', 'id' => $img->id,'album_id'=>$model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Вы действительно хотите удалить?',
            'method' => 'post',
        ],
    ]) ?>
    <? endif;?>


    <?= $form->field($model,'image')->fileInput() ?>


<br><br>
<hr>
        <? if($gallery):?>

        <? foreach($gallery as $gal):?>

                <? if($gal->isMain==1) continue;?>

                   <img class="galform" src="<?=$gal->getUrl('100x')?>">
                <? if($img->filePath != 'no-image.png'):?>
                    <?= Html::a('', ['deleteimg', 'id' => $gal->id,'album_id'=>$model->id], [
                        'class' => 'fa fa-minus-square-o ',
                        'data' => [
                            'confirm' => 'Вы действительно хотите удалить?',
                            'method' => 'post',
                        ],
                    ]) ?>
                <? endif;?>
        <? endforeach;?>


    <? endif;?>


      <?= $form->field($model,'gallery[]')->fileInput(
        ['multiple'=>true,'accept'=>'image/*']
    ) ?>
    <hr>

    <?=
    $form->field($model, 'text')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),

]); ?>

   

    <?= $form->field($model, 'audio')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать альбом' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
