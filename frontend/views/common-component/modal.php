<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.\
 * 
 * 常用组件--模态框
 * 
 */

use yii\bootstrap\Modal;
use yii\helpers\Html;

Modal::begin([
    'id'=>'page-modal',
    'header'=>'<h5>标题</h5>',
    'toggleButton'=>['label'=>'click me'],
]);

echo "这是模态内容";
Modal::end();
?>

<?= Html::a('点击按钮', '#', [
    'class' => 'btn btn-success',
    'data-toggle' => 'modal',
    'data-target' => '#page-modal',    //此处对应Modal组件中设置的id
])
?>