<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 基本配置测试的Controller
 * 
 */
namespace frontend\controllers;
use yii\web\Controller;

class ConfigController extends Controller{
    
    //测试邮件发送
    public function actionSendMail(){
        //echo "测试邮件发送";
        return $this->render('sendMail');
    }
    
}

