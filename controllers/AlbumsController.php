<?php

namespace app\controllers;

use yii\base\Controller;
use app\models\Categories;
use app\models\Albums;
use yii\data\Pagination;
use app\models\Mail;



class AlbumsController extends Controller
{
    public function actionView()
    {
        $model=new Mail();
        if($model->load(\Yii::$app->request->post())){
            if($model->save()){
                \Yii::$app->session->setFlash('success','Ваше сообщение отправлено');
                return \Yii::$app->getResponse()->redirect('/categories/index');
            }else{
                \Yii::$app->session->setFlash('error','Ошибка передачи данных, проверьте запоненные поля');
            }
        }

        $this->layout='albumses';



        $id=\Yii::$app->request->get('id');
        $cat=Categories::find()->where(["id"=>$id])->all();
        $albums=Albums::find()-> where(["categories_id"=>$id]);

        $pages = new Pagination(
            ['totalCount' => $albums->count(),
                'pageSize'=>20,
                'forcePageParam'=>false,
                'pageSizeParam'=>false]);
        
        $models = $albums->offset($pages->offset)
            ->limit($pages->limit)
            ->all();



        return $this->render('view',compact('models','cat','pages','model'));
    }

    

    public function actionAlbum(){


        $model=new Mail();
        if($model->load(\Yii::$app->request->post())){
            if($model->save()){
                \Yii::$app->session->setFlash('success','Ваше сообщение отправлено');
                return \Yii::$app->getResponse()->redirect('/categories/index');
            }else{
                \Yii::$app->session->setFlash('error','Ошибка передачи данных, проверьте запоненные поля');
            }
        }
        $this->layout='albumses';
        $id=\Yii::$app->request->get('id');
        $albums=Albums::find()->where(["id"=>$id])->all();

        return $this->render('album',compact('albums','mail','model'));
    }
}