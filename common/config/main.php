<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        //添加redis组件
        'redis'=>[
            'class'=>'yii\redis\Connection',
            'hostname'=>'localhost',
            'port'=>6379,
            'database'=>0,
        ],
        
    ],
    
    //添加kartik--GridView
    'modules'=>[
        'gridview'=>[
            'class'=>'kartik\grid\Module'
            // enter optional module parameters below - only if you need to  
            // use your own export download action or custom translation 
            // message source
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => [
            //     'class' => 'yii\i18n\PhpMessageSource',
            //      'basePath' => '@kvgrid/messages',
            //     'forceTranslation' => true
            // ]
        ]
        
    ]
];
