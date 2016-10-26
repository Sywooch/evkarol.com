<?php
/**
 * Created by PhpStorm.
 * User: katedima
 * Date: 15.08.2016
 * Time: 19:28
 */

namespace app\models;


use yii\db\ActiveRecord;

class Albums extends ActiveRecord
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
        return 'albums';
    }

    public function getCategories(){
        return $this->hasOne(Categories::className(),['id'=>'categories_id']);
    }

  

}