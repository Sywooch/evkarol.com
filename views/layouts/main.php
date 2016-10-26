<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\LtAppAsset;
use yii\widgets\ActiveForm;
use app\models\Mail;

AppAsset::register($this);
LtAppAsset::register($this);
?>
<?php $this->beginPage() ?>

<? $this->title='Фотограф - Евгений Кароль'?>
<!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <link rel="icon" href="/web/camera.ico" type="image/png">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>


<body>
<?php $this->beginBody() ?>


<?=$content?>


<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>