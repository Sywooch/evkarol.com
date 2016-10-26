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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

//        'js/fancybox/jquery.fancybox.css',
        'css/style.css',
        'css/font-awesome.css',
        'css/animate.css',
        
    ];
           
    public $js = [

        'js/jquery-scrolltofixed.js',
        'js/jquery.nav.js',
//        'js/jquery.easing.1.3.js',
        'js/jquery.isotope.js',
        'js/fancybox/jquery.fancybox.pack.js',
//        'js/wow.js',
        'js/custom.js', 
        'js/MyScript.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
}
