<?php
/**
 * Created by PhpStorm.
 * User: katedima
 * Date: 20.08.2016
 * Time: 12:38
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;

class Image extends ActiveRecord
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
        return 'image';
    }


}