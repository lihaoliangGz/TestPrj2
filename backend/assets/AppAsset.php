<?php

namespace backend\assets;

use yii\web\AssetBundle;


/**
 * 静态资源配置:
 * a.首先在/frontend/web中创建statics文件夹作为frontend的前端资源文件
 * b.在statics目录下创建3个文件夹，css、js、images，存放css文件，js文件，和图片。
 * c.如果是高级版（yii2.0.6-advanced）在/frontend/web下会有一个css文件，将文件中的所有css文件放入我们之前创建好的/statics/css文件中
 * 
 * 
 */

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap-datetimepicker.min.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
