<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'rest-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'v1' => [
            'class' => 'rest\versions\v1\RestModule'
        ],
        'v2' => [
            'class' => 'rest\versions\v2\RestModule'
        ],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableSession' => false,
        ],
        'response' => [
            'format' => yii\web\Response::FORMAT_JSON,
            'charset' => 'UTF-8',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'request' => [
            'class' => '\yii\web\Request',
            'enableCookieValidation' => false,
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'yii\rest\UrlRule', 'controller' => ['v1/tour', 'v1/sda', 'v1/booth']],
                'OPTIONS v1/user/login' => 'v1/user/login',
                'GET v1/tour/getdata' => 'v1/tour/getdata',
                'POST v2/user/login' => 'v2/user/login',
                'POST v1/sda/addsda' => 'v1/sda/addsda',
                'POST v1/sda/removesda' => 'v1/sda/removesda',
                'POST v1/sda/sdabooth' => 'v1/sda/sdabooth',
                'POST v1/sda/getsdabooth' => 'v1/sda/getsdabooth',
            	'POST v1/sda/sdasearch' => 'v1/sda/sdasearch',
                'POST v1/sda/getmysda' => 'v1/sda/getmysda',
                'POST v1/booth/boothschedule' => 'v1/booth/boothschedule',
                'POST v1/booth/getmybooth' => 'v1/booth/getmybooth',
                'POST v1/booth/removemybooth' => 'v1/booth/removemybooth',
                'POST v1/schedule/myschedule' => 'v1/schedule/myschedule',
                'POST v1/schedule/allmeeting' => 'v1/schedule/allmeeting',
                'POST v1/schedule/addmeetingschedule' => 'v1/schedule/addmeetingschedule',
                 'POST v1/schedule/mymeeting' => 'v1/schedule/mymeeting',
                'POST v1/schedule/removemeeting' => 'v1/schedule/removemeeting',
                'OPTIONS v2/user/login' => 'v2/user/login',
            ],
        ],
    ],
    'params' => $params,
];
