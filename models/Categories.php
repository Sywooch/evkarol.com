<?php
/**
 * Created by PhpStorm.
 * User: katedima
 * Date: 15.08.2016
 * Time: 19:23
 */

namespace app\models;


use yii\db\ActiveRecord;

class Categories extends ActiveRecord
{
    

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return "categories";
    }

    public function getAlbums(){
        return $this->hasMany(Albums::className(),['categories_id'=>'id']);
    }


}