<?
use yii\helpers\Html;
use yii\base\Widget;
use yii\widgets\ActiveForm;
?>




<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">

    <div class="hero_wrapper">
        <div class="container-fluid">
            <div class="hero_section">
                <div class="row ">
                    <div class="col-sm-12 centered main-head">

                        <?= Html::img('@web/web/img/main-pic.png', ['alt' => 'foto-logo']) ?>

                    </div>

                    <div class="row ">
                        <div class="col-sm-12 centered">
                            <ul class="list-inline soc-link-head">
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

                                <li id="change" class="dropup "> <a href="#" class="dropdown-toggle " data-toggle="dropdown"
                                                                    role="button" aria-haspopup="true" aria-expanded="true">портфолио<span class="caret"></span></a>
                                    <ul class="dropdown-menu second-menu">
                                       <?=\app\components\MenuWidget::widget()?>
                                    </ul>
                                </li>

                                <li><a href="#aboutMe" class="scroll-link">обо мне</a></li>
                                <li><a href="#service " class="scroll-link">услуги и цены</a></li>
                                <li><a href="#contact " class="scroll-link">контакты</a></li>
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


<section id="aboutUs"><!--Aboutus-->
    <div class="inner_wrapper about-us aboutUs-container fadeInLeft animated wow">
        <div class="container">
            <h2 id="aboutMe">Обо мне</h2>
            <h6 >Индивидуальный подход и безупречный результат  - это основа моей работы.</h6>
            <div class="inner_section">
                <div class="row">
                    <div class="col-md-6">
                        <?=Html::img("@web/web/img/karol.png",['alt'=>'Евгений Кароль', 'class'=>'img-responsive'])?>
                    </div>
                    <div class="col-md-6">
                        <h3 ></h3>
                        <p >Профессиональный фотограф - это человек, который помогает сохранить воспоминания о
                            самых важных событиях в Вашей жизни. Или имеет возможность визуально записать кусочек
                            из Вашей повседневной жизни с помощью фотовспышки. И будьте уверены, если Вы нашли "своего"
                            фотографа, он сможет уловить Ваши желания и настроение, подчеркнёт индивидуальность,
                            прочувствует атмосферу события и обязательно передаст
                            все эмоции в красивых и трогательных снимках. </p>

                        <p>Занимаюсь фотографией с 2010 года. Делаю снимки людей,
                            эмоций и настроения! А если конкретнее, то это: свадебная съемка, love-story,
                            фотосессии для девушек, съемка беременных и семейные фотосессии. Я стремлюсь умело захватить
                            интересный образ  и использую изображение, чтобы выразить свое видение, передать идею, рассказать историю и вызвать эмоции и реакцию зрителя. Если в одном предложении охарактеризовать мой
                            стиль, то я делаю ЯРКИЕ И ДУШЕВНЫЕ ФОТОГРАФИИ ДЛЯ КРАСИВЫХ И
                            СЧАСТЛИВЫХ ЛЮДЕЙ.</p>

                        <p>Вам хочется быть особенными: красивыми, светящимися, немного волшебными,
                            и моя задача уловить Ваше состояние, сохранить его, показать в полном проявлении.
                            Не делать фотографии-клише (шаблонные фотографии), из-за чего изображение теряет свою
                            подлинность и оригинальность, а следовать за Вашей живой эмоцией, или помочь расслабиться, чтобы Вы могли проявить
                            ее. Для меня в работе с Вами важно, чтобы она приносила удовольствие: как во время съемки, так и после.
                        </p>

                        <ul class="about-us-list">
                            <li class="points">индивидуальный подход к каждой фотосъемке</li>
                            <li class="points">высокое качество полученных снимков</li>
                            <li class="points">работа, направленная на результат</li>
                        </ul><!-- /.about-us-list -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Aboutus-->


<!--Service-->
<section  id="service">
    <div class="container">
        <h2>Услуги и цены</h2>
        <h6>Стоимость всех услуг Вы можете узнать   <a class="service-pic" href="#contact">
                <i class="fa fa-phone" aria-hidden="true"></i>
                или <i class="fa fa-envelope" aria-hidden="true"></i></a></h6>
        <div class="service_wrapper">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-heart"></i></span> </div>
                    <div class="service_block">

                        <h3 class="animated fadeInUp wow">Пакет услуг СТАНДАРТ:</h3>
                        <p class="animated fadeInDown wow">
                           - Личная встреча и индивидуальная консультация.<br>
                           - Съемка от макияжа невесты до банкета (примерно 8 часов). <br>
                           - Итог работы: не менее 400 обработанных фотографий, печать 10 фото формата <br>
                            20х30. DVD в дизайнерской упаковке с обработанными фотографиями.<br><br>
                           - Под заказ фотокнига (формата 30х30, 20 разворотов, обложка из кожзама).
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-user"></i></span> </div>
                    <div class="service_block">
                        <h3 class="animated fadeInUp wow">Пакет услуг ПРЕСТИЖ:</h3>
                        <p class="animated fadeInDown wow">
                           - Личная встреча и индивидуальная консультация.<br>
                           - Съемка от макияжа невесты до первого танца на банкете(примерно 12 часов). <br>
                           - Итог работы: не менее 600 обработанных фотографий, слайдшоу, печать 10 фото <br>
                            формата 20х30. DVD в дизайнерской упаковке с обработанными фотографиями.<br><br>
                           - Под заказ фотокнига (формата 30х30, 20 разворотов, обложка из кожзама)
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-building-o "></i></span> </div>
                    <div class="service_block">

                        <h3 class="animated fadeInUp wow">Пакет услуг VIP:</h3>
                        <p class="animated fadeInDown wow">
                           - Личная встреча и индивидуальная консультация.<br>
                           - Cъемка лав-стори (досвадебная съемка). <br>
                           - Съемка от макияжа невесты до завершения  банкета (примерно 9 утра - 12 вечера). <br>
                           - Итог работы: не менее 700 обработанных фотографий, слайдшоу. DVD в 
                            дизайнерской упаковке с обработанными
                            фотографиями.<br><br>
                           - Под заказ фотокнига (формата 30х30, 20 разворотов, обложка из кожзама).
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!--Service-->
<!--Footer-->
<footer class="footer_wrapper" >
    <div id="scrollup"><img alt="Прокрутить вверх" src="/web/img/up.png"></div>
    <div class="container">
        <section class="page_section contact" >
            <div class="contact_section">
                <h2>Напишите мне</h2>
                <h6>Буду рад ответить на Ваши вопросы и не забудьте указать свои контактные данные.</h6>

            </div>
            <div class="row" id="contact">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <h4 class="formh">Адрес</h4>
                            <p>Республика Беларусь, Лида</p>
                        </div>
                        <div class="detail">
                            <h4 class="formh">Телефон</h4>
                            <p>+375 33 337 7811</p>
                        </div>
                        <div class="detail">
                            <h4 class="formh">Email</h4>
                            <p>evgeniy.karol@mail.ru</p>
                        </div>
                    </div>



                    <ul class="social_links">
                        <li class="facebook animated bounceIn wow delay-03s"><a href="https://new.vk.com/eugeny_karol" target="_blank" ><i class="fa fa-vk"></i></a></li>
                        <li class="instagram animated bounceIn wow delay-04s"><a href="https://www.instagram.com/karolik_evgenij/"  target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li class="gplus animated bounceIn wow delay-05s"><a href="https://www.facebook.com/profile.php?id=100010559468872" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 wow fadeInLeft delay-06s">

                    <? $form = ActiveForm::begin(['options'=>['class'=>'form']]) ?>
                    <?= $form->field($model, 'name')->textInput() ?>
                    <?= $form->field($model, 'email')->input('email') ?>
                    <?= $form->field($model, 'text')->textarea() ?>
                    <?= Html::submitButton('Отправить', ['class' => 'input-btn']) ?>
                    <?php ActiveForm::end() ?>

                </div>
            </div>

        </section>
    </div>
    <div class="container">

        <div class="footer_bottom">
            <div class="row">
                <div class="col-xs-12 centered">
                    <?= Html::img('@web/web/img/foot-tex2t.png', ['alt' => 'Евгений Кароль фотограф']) ?>

                </div>
            </div>
            <span>Developed by  <a target="_blank" href="https://new.vk.com/burn_for_me">Me)</a> </span>
        </div>

    </div>
</footer>