<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * kartik -- Builder测试的控制器
 */

namespace frontend\controllers;
use yii\web\Controller;
/**
 * Description of BuilderController
 *
 * @author Administrator
 */
class BuilderController extends Controller{
    
    
    /**
     * Form Builder	Form.php
     * @return type
     */
    public function actionFormBuilder(){
        
        
        return $this->renderPartial('form-builder');
        
    }

    /**
     *  Form Grid Builder	FormGrid.php
     */
    public function actionFormGridBuilder(){
        return $this->renderPartial('form-grid-builder');
    }
    
    
    /**
     * Tabular Form	TabularForm.php
     */
    public function actionTabularForm(){
        
        return $this->renderPartial('tabular-form');
    }
}
