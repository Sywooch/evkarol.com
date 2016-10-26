<?
use yii\data\Pagination;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>


<section id="album">
    <div class="container">
        <h1 class="centered"><?=$cat[0]['categories_name']?></h1>
        <div class="row">


            <? foreach ($models as $album):?>
            <div class="col-md-5 col-md-offset-1 ">
                <div class="row whitebg">
                    <? $img=$album->getImage();?>

                    <?= $this->registerMetaTag([
                        'name' => 'description',
                        'content' => $album['description']
                    ]);
                     $this->registerMetaTag([
                        'name' => 'keywords',
                        'content' => $album['keywords']
                    ]);

                    ?>

                    <div class="album">
                        <div class="leftside col-md-6 right">
                            <a href="<?=\yii\helpers\Url::to(['albums/album','id'=>$album['id']])?>"><img src="<?=$img->getUrl()?>"></a>
                        </div>


                        <div class="rightside col-md-6  right">
                            <h3><a href="<?=\yii\helpers\Url::to(['albums/album','id'=>$album['id']])?>"><?=$album['title']?></a></h3>
                            <p class="album-text"><?=$album['album_text']?></p>
                            <p class="album-date"><?
                                $date=explode(' ', $album['date']);
                                $date2=explode('-',$date[0]);
                                switch ($date2[1]){
                                    case (1):
                                        $date2[1]="января";
                                        break;
                                    case (2):
                                        $date2[1]="февраля";
                                        break;
                                    case (3):
                                        $date2[1]="марта";
                                        break;
                                    case (4):
                                        $date2[1]="апреля";
                                        break;
                                    case (5):
                                        $date2[1]="мая";
                                        break;
                                    case (6):
                                        $date2[1]="июня";
                                        break;
                                    case (7):
                                        $date2[1]="июля";
                                        break;
                                    case (8):
                                        $date2[1]="августа";
                                        break;
                                    case (9):
                                        $date2[1]="сентября";
                                        break;
                                    case (10):
                                        $date2[1]="октября";
                                        break;
                                    case (11):
                                        $date2[1]="ноября";
                                        break;
                                    case (12):
                                        $date2[1]="декабря";
                                        break;
                                     }
                                 $newdate=$date2[2]." ".$date2[1]." ".$date2[0]." года";
                                echo $newdate;
                                ?></p>
                        </div>
                    </div>


                </div>
            </div>
            <? endforeach;?>



        </div>
        <?
        // display pagination
        echo LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
    </div>
</section>

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