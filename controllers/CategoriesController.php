<?php
/**
 * Created by PhpStorm.
 * User: katedima
 * Date: 15.08.2016
 * Time: 20:36
 */

namespace app\controllers;


use app\models\Albums;
use app\models\Categories;
use yii\web\Controller;
use app\models\Mail;

class CategoriesController extends Controller
{

    public function actionIndex()
    {

        $model=new Mail();
       if($model->load(\Yii::$app->request->post())){
           if($model->save()){
              \Yii::$app->session->setFlash('success','Ваше сообщение отправлено');
                return $this->refresh();
           }else{
               \Yii::$app->session->setFlash('error','Ошибка передачи данных, проверьте запоненные поля');
           }

       }

        return $this->render('index',compact('model'));
    }

 
}