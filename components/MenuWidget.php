<?php

namespace app\components;

use yii\base\Widget;
use app\models\Categories;

class MenuWidget extends Widget
{
    public $tpl;
    public $arrCategories;
    public $menuHtml;
    public $model;

    public function init(){
        parent::init();
        if($this->tpl===null) $this->tpl='menu';

        $this->tpl.='.php';

    }

    public function run(){
        $this->arrCategories=Categories::find()
            ->indexBy('id')  //чтобы ключи совпадали с id
            ->asArray()         // превращает в массив
            ->all();            //находит всё
//       debug($this->arrCategories);

        return  $this->menuHtml=$this->getMenuHtml($this->arrCategories);
            
    }



    protected function getMenuHtml($arr){  //передает параметром каждый элемент массива в шаблон
        $str='';
        foreach ($arr as $category){
            $str.=$this->catToTemplate($category);
        }
        return $str;

    }

    protected function catToTemplate($category){
        ob_start();
        include __DIR__.'/menu_tpl/'.$this->tpl;
        return ob_get_clean();

    }


}