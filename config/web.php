<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'qZv8pBDSPSittbqB1tc8ln6O3m9VLdJZ',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
    'aliases' => [  //定义别名
        //'@app' => dirname(__DIR__),
    ],
    'catchAll' => [ //它指定一个要处理所有用户请求的 控制器方法， 通常在维护模式下使用，同一个方法处理所有用户请求。(所有用户请求将跳转到site/say这个控制方法中)
//         'site/say',
//         'message' => '网站维护...',
    ],
    'controllerMap' => [    //指定一个控制器ID(testsite)到控制器类SiteController
        'testsite' => 'app\controllers\SiteController',
//         'article' => [
//             'class' => 'app\controllers\PostController',
//             'enableCsrfValidation' => false,
//         ],
    ],
    'language' => 'zh-CN',  //指定应用展示给终端用户的语言， 默认为 en 标识英文
    'sourceLanguage' => 'zh-CN',    //指定应用代码的语言，默认为 'en-US' 标识英文（美国）， 如果应用不是英文请修改该属性
    'timeZone' => 'PRC',    //指定时区
    'modules' => [
        'english' => [
            'class' => 'app\modules\english\English'
        ]
    ]
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
