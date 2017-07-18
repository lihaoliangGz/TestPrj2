<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 *yii高级模板->常用组件测试 
 */

namespace frontend\controllers;

use yii\web\Controller;
/**
 * Description of CommonComponentController
 *
 * @author Administrator
 */
class CommonComponentController extends Controller{
    
    /**
     * 列表(GridView)--
     */
    public function actionGridView(){
        
        return $this->renderPartial('grid-view');
    }
    
    /**
     * 警告框(Alert)
     */
    public function actionAlert(){
        
        return $this->renderPartial('alert');
    }
    
    /**
     * 模态框(Modal)
     */
    public function actionModal(){
        return $this->renderPartial('modal');
    }
}
