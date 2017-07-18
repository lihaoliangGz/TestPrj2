<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 常用组件--警告框
 */

use yii\bootstrap\Alert;

//echo Alert::widget([
//    'options'=>[
//        'class'=>'alert-info',
//    ],
//    'body'=>'操作失败',
//]);


//另一种写法
Alert::begin([
    'options'=>[
        'class'=>'alert-waring',
    ]
]);
echo "操作失败";

Alert::end();