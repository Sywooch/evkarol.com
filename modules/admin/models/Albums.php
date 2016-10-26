<?php

namespace app\modules\admin\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "albums".
 *
 * @property integer $id
 * @property integer $categories_id
 * @property string $title
 * @property string $album_text
 * @property string $date
 * @property string $img
 * @property string $text
 * @property string $audio
 */
class Albums extends \yii\db\ActiveRecord
{

    public $image;
    public $gallery;
    public $audio;



    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'albums';
    }

    public function getCategories(){
        return $this->hasOne(Categories::className(),['id'=>'categories_id']);
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categories_id'], 'required'],
            [['categories_id'], 'integer'],
            [['date', 'description', 'keywords'], 'safe'],
            [['text'], 'string'],
            [['title', 'album_text', 'description','keywords','song'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['gallery'], 'file',  'extensions' => 'png, jpg, jpeg', 'maxFiles' => 20],
            [['audio'], 'file', 'extensions' => 'mp3','maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categories_id' => 'Название категории',
            'title' => 'Заголовок альбома',
            'album_text' => 'Цитата',
            'description' => 'Описание',
            'keywords' => 'Ключевые слова',
            'date' => 'Дата добавления',
            'image' => 'Главная картинка альбома (500*500)',
            'gallery'=>'Галерея альбома (размер 1200*800)',
            'text' => 'Основной текст в альбоме',
            'audio' => 'Аудио',
        ];
    }

    public function upload(){
        if($this->validate()){
            $path='upload/store/'.$this->image->baseName.'.'.$this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path,true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }

    public function uploadGallery(){
        if($this->validate()){
            foreach ($this->gallery as $file){
                $path='upload/store/'.$file->baseName.'.'.$file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
               
            }
            return true;
        }else{
            return false;
        }
    }

    public function uploadAudio()
    {
        if ($this->validate()) {
            $this->audio->saveAs('audio/' . $this->audio->baseName . '.' . $this->audio->extension);
            return true;
        } else {
            return false;
        }
    }

   /* public function uploadAudio()
    {
        if ($this->validate()) {
            $this->audio->saveAs('audio/' . $this->audio->baseName . '.' . $this->audio->extension);
            return true;
        } else {
            return false;
        }
    }*/


    
}
