<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';


    public $js = [
    "js/respond-1.1.0.min.js",
    "js/html5shiv.js",
    "js/html5element.js",
   ];


    public  $jsOptions=[
    'condition'=>'if lt IE 9',
    'position'=>\yii\web\View::POS_HEAD
    ];


}