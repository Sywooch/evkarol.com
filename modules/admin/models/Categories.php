<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $categories_name
 * @property string $descriptions
 * @property string $keywords
 */
class Categories extends \yii\db\ActiveRecord
{

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
        return 'categories';
    }

    public function getAlbums(){
        return $this->hasMany(Albums::className(),['categories_id'=>'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categories_name', 'descriptions', 'keywords'], 'required'],
            [['categories_name', 'descriptions', 'keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categories_name' => 'Наименование категории',
            'descriptions' => 'Описание',
            'keywords' => 'Ключевые слова',
        ];
    }
}
