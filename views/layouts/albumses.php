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
<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer-album">

    <div class="hero_wrapper-album">
        <div class="container">
            <div class="hero_section-album">
                <div class="row ">
                    <div class="col-md-6 col-md-offset-3 centered  main-head-album">
                        <a href="/"><img src="/web/img/main-pic-album.png" alt="foto-logo"></a>
                    </div>

                    <div class="col-md-3 ">
                        <ul class="list-inline soc-link-head-album">
                            <li class="facebook animated bounceIn wow delay-03s"><a href="https://new.vk.com/eugeny_karol" target="_blank" ><i class="fa fa-vk"></i></a></li>
                            <li class="instagram animated bounceIn wow delay-04s"><a href="https://www.instagram.com/karolik_evgenij/"  target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li class="gplus animated bounceIn wow delay-05s"><a href="https://www.facebook.com/profile.php?id=100010559468872" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>

                </div>


            </div>
        </div>
    </div>
    </div>

</section>
<!--Hero_Section-->

<!--Header_section-->
<header id="header_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header_box ">

                    <nav class="navbar navbar-inverse" role="navigation">
                        <div class="navbar-header">
                            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>


                        <div id="main-nav" class="collapse navbar-collapse navStyle ">
                            <ul class="nav " id="mainNav">

                                <li id="change" class="dropup"> <a href="#" class="dropdown-toggle scroll-link" data-toggle="dropdown"
                                                                   role="button" aria-haspopup="true" aria-expanded="true">портфолио<span class="caret"></span></a>
                                    <ul class="dropdown-menu second-menu">
                                        <?=\app\components\MenuWidget::widget()?>
                                    </ul>
                                </li>
                                <li><a href="/#aboutUs" class="scroll-link">обо мне</a></li>
                                <li><a href="/#service " class="scroll-link">услуги и цены</a></li>
                                <li><a href="/#contact " class="scroll-link">контакты</a></li>
                                <? if (!Yii::$app->user->isGuest): ?>
                                    <br>
                                    <li><a class="admin" href="<?=\yii\helpers\Url::to(['/admin/'])?>" class="scroll-link">Панель админа</a></li>
                                    <li><a class="admin" href="<?=\yii\helpers\Url::to(['/site/logout'])?>" class="scroll-link">ВЫХОД </a></li>
                                <? endif;?>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header_section-->

<?=$content?>


<?php $this->endBody() ?>
<!--Footer-->

</body>
</html>
<?php $this->endPage() ?>