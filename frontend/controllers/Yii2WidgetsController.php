<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * yii2-widgets测试的控制器。
 * 
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Yii2Widgets;

/**
 * Description of yii2-widgets
 *
 * @author Administrator
 */
class Yii2WidgetsController extends Controller{
    
    public function actionActiveForm(){
        $model=new Yii2Widgets();
        return $this->render('active-form',['model'=>$model]);
    }
    
    
}
