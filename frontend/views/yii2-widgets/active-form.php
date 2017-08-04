<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * yii2-widgets测试的视图
 * 
 */

use kartik\widgets\ActiveForm;
use kartik\helpers\Html;

?>


<?php
$form= ActiveForm::begin([
    'id'=>'login-form-vertical',
    'type'=> ActiveForm::TYPE_VERTICAL,
]);
echo $form->field($model, 'username');
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'rememberMe')->checkbox();
echo "<div class='form-group'>";
echo Html::submitButton('Login',['class'=>'btn btn-primary']);
echo Html::submitButton('reset',['class'=>'btn btn-default']);
ActiveForm::end();
?>




