<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 *  kartik -- Builder--> Form Builder测试的模型
 * 
 */

namespace frontend\models;

use yii\base\Model;
use kartik\builder\Form;
use yii\helpers\Html;

/**
 * Description of BuilderModel
 *
 * @author Administrator
 */
class BuilderModel extends Model{
    public $username;
    public $password;
    public $rememberMe;
    public $notes;
    public $begin_date;
    public $end_date;
    public $begin_time;
    public $end_time;
    public $typeahead_data;
    public $birthday;
    public $state_1;
    public $color;
    public $status;
    public $brightness;






    public function getFormAttribs() {
        return [
        'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => '请输入姓名']],
        'password' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => '请输入密码']],
        'rememberMe' => ['type' => Form::INPUT_CHECKBOX, 'visible' => FALSE],
        'actions' => ['type' => Form::INPUT_RAW, 'visible' => TRUE, 'value' => Html::submitButton('提交', ['class' => 'btn btn-primary'])],
        ];
    }

}
