<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * kartik -- Builder--> Form Builder测试的视图
 */

use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use yii\helpers\Html;
$form= ActiveForm::begin(['type'=> ActiveForm::TYPE_VERTICAL]);
echo Form::widget([
    'model'=>$model,
    'form'=>$form,
    'columns'=>2,
   
    'attributes'=>$model->formAttribs,
]);
ActiveForm::end();





$form = ActiveForm::begin(['type' => ActiveForm::TYPE_VERTICAL]);
echo Form::widget([
    'model' => $model,
    'form' => $form,
    'columns' => 2,
    'attributes' => [// 2 column layout
        'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter username...']],
        'password' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']]
    ]
]);
echo Form::widget([// 1 column layout
    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
        'notes' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter notes...']],
    ]
]);
echo Form::widget([// nesting attributes together (without labels for children)
    'model' => $model,
    'form' => $form,
    'columns' => 2,
    'attributes' => [
        'date_range' => [
            'label' => 'Date Range',
            'attributes' => [
                'begin_date' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => '\kartik\datecontrol\DateControl',
                    'options' => [
                        'options' => [
                            'options' => ['placeholder' => 'Date from...']
                        ]
                    ],
                ],
                'end_date' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => '\kartik\datecontrol\DateControl',
                    'options' => [
                        'options' => [
                            'options' => ['placeholder' => 'Date to...', 'class' => 'col-md-9']
                        ]
                    ]
                ],
            ]
        ],
        'time_range' => [
            'label' => 'Time Range',
            'attributes' => [
                'begin_time' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => '\kartik\widgets\TimePicker',
                    'options' => ['options' => ['placeholder' => 'Time from...']],
                ],
                'end_time' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => '\kartik\widgets\TimePicker',
                    'options' => ['options' => ['placeholder' => 'Time to...', 'class' => 'col-md-9']]
                ],
            ]
        ],
    ]
]);
echo Form::widget([// 3 column layout
    'model' => $model,
    'form' => $form,
    'columns' => 3,
    'attributes' => [
        'birthday' => [
            'type' => Form::INPUT_WIDGET,
            'widgetClass' => '\kartik\widgets\DatePicker',
            'hint' => 'Enter birthday (mm/dd/yyyy)'
        ],
        'state_1' => [
            'type' => Form::INPUT_WIDGET,
            'widgetClass' => '\kartik\widgets\Select2',
            'options' => ['data' => $model->typeahead_data],
            'hint' => 'Type and select state'
        ],
        'color' => [
            'type' => Form::INPUT_WIDGET,
            'widgetClass' => '\kartik\widgets\ColorInput',
            'hint' => 'Choose your color'
        ],
        'status' => [
            'type' => Form::INPUT_RADIO_LIST,
            'items' => [true => 'Active', false => 'Inactive'],
            'options' => ['inline' => true]
        ],
        'brightness' => [
            'type' => Form::INPUT_WIDGET,
            'label' => Html::label('Brightness (%)'),
            'widgetClass' => '\kartik\widgets\RangeInput',
            'options' => ['width' => '80%']
        ],
        'actions' => [
            'type' => Form::INPUT_RAW,
            'value' => '<div style="text-align: right; margin-top: 20px">' .
            Html::resetButton('Reset', ['class' => 'btn btn-default']) . ' ' .
            Html::button('Submit', ['type' => 'button', 'class' => 'btn btn-primary']) .
            '</div>'
        ],
    ]
]);
ActiveForm::end();
