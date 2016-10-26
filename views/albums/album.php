<?
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>


<div class="container">
    <div class="row">
        <div class="col-md-12 centered">
            <h1><?=$albums[0]['title']?></h1>
            <p><?=$albums[0]['text']?></p><br><br>
            <audio loop controls>
                              <source src='/web/audio/<?=$albums[0]['song']?>' >
             </audio>
            <?= $this->registerMetaTag([
                'name' => 'description',
                'content' => $albums[0]['description']
            ]);
            $this->registerMetaTag([
                'name' => 'keywords',
                'content' => $albums[0]['keywords']
            ]);

            ?>


        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 pic ">
            <? $gal=$albums[0]->getImages();?>

            <? foreach($gal as $gal):?>

                <? if($gal->isMain==1) continue;?>

                <img class="galform" src="<?=$gal->getUrl()?>">

            <? endforeach;?>

        </div>
    </div>

</div>
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
