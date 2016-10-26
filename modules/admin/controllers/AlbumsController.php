<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Image;
use Yii;
use app\modules\admin\models\Albums;

use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AlbumsController implements the CRUD actions for Albums model.
 */
class AlbumsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Albums models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Albums::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Albums model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Albums model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Albums();

        if ($model->load(Yii::$app->request->post())  && $model->save()) {

            $model->image=UploadedFile::getInstance($model,'image');//главная картинка
            if($model->image){
                $model->upload();
            }
            unset($model->image);

            $model->gallery=UploadedFile::getInstances($model,'gallery');//галерея
            $model->uploadGallery();
            $model->gallery=null;

            $model->audio=UploadedFile::getInstance($model,'audio');
            if($model->audio){
                $model->uploadAudio();
                $songName=$model->audio->name;
                $songid=Albums::find()->max('id');
                $song=Albums::findOne($songid);
                $song->song=$songName;
                $song->save();
               // debug($song);
            }
          

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Albums model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {


            $model->image=UploadedFile::getInstance($model,'image');
            if($model->image){
                $model->upload();
            }
            unset($model->image);


            $model->gallery=UploadedFile::getInstances($model,'gallery');
            $model->uploadGallery();$model->gallery=null;

            $model->audio=UploadedFile::getInstance($model,'audio');
            if($model->audio){
                $model->uploadAudio();
                $songName=$model->audio->name;
                $song=Albums::findOne($id);
                $song->song=$songName;
                $song->save();
               // debug($songName);
            }





            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,

            ]);
        }
    }
    public function actionDeleteimg($id,$album_id)
    {

        if(\Yii::$app->request->post('id')){
            die('flag');
        }

        $model = Albums::findOne($album_id);
        $image=Image::find()->where(['id'=>$id])->one();
        $image->delete();

        return $this->redirect(['update', 'id' => $model->id]);
    }


    /**
     * Deletes an existing Albums model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Albums model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Albums the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Albums::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



}
