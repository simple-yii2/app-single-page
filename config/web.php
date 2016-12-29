<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'language' => 'en-US',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'storage'],
    'modules' => [
        'cms' => 'cms\Module',
        'feedback' => 'cms\feedback\frontend\Module',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'cms\user\common\components\User',
            'identityClass' => 'cms\user\common\models\User',
            'loginUrl' => ['/user/login/index'],
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ['pattern' => 'cms', 'route' => '/cms/default/index'],
                ['pattern' => 'cms/login', 'route' => '/cms/user/login/index'],
                ['pattern' => 'cms/logout', 'route' => '/cms/user/logout/index'],
                ['pattern' => 'feedback', 'route' => '/feedback/feedback/index'],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'assetManager' => [
            'forceCopy' => YII_DEBUG,
        ],
        'storage' => [
            'class' => 'dkhlystov\storage\components\FileStorage',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
