<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'language' => 'zh-CN', //选择中文语言包,此处需要注意的是如果语种是一样的话（即sourceLanguage和language是同一语种），
    //默认不使用语言包，需要将 forceTranslation设置为true，才会生效！
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
          'urlManager' => [
          'enablePrettyUrl' => true,
          'showScriptName' => false,
          'rules' => [
          ],
          ],
         */

        //i18n配置
        'i18n' => [
            'translations' => [
                'common' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'common' => 'common.php',
                    ],
                ],
                'power' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'power' => 'power.php',
                    ]
                ],
            ]
        ],
        //界面主题配置
//        'view' => [
//            'theme' => [
//                'pathMap' => ['@frontend/views' => '@frontend/themes/test/views'], //定义了原路径到主题路径的映射表
//                'baseUrl' => '@web/themes/test', //定义了主题中所引用的资源的基础路径
//            //这意味着所有@backend/views 中的视图将首先查找 @backend/themes/blog/views目录，如果找到了则将使用该视图文件，而不是原视图。
//            ]
//        ],
    ],
    //url美化组件:
//        'urlManager' =>[
//            'enablePrettyUrl' =>true,
//            'showScriptName' =>FALSE,
//            'suffix' =>'.html',//跟上.html(伪静态)
//            'rules' =>[
//                
//            ],
//        ],
    'params' => $params,
];
