<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => 'NFC',
    'language' => 'th',
    // 'timezone' => 'Asia/Bangkok',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        [
            'class' => 'app\components\LanguageSelector',
            'supportedLanguages' => ['en-US', 'th-TH'], //กำหนดรายการภาษาที่ support หรือใช้ได้
        ]
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        // kartik gridview
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],

        'sam' => [
            'class' => 'app\modules\sam\Module',
        ],

        //itms
        'itms' => [
            'class' => 'app\modules\itms\Module',
        ],
        'jobs' => [
            'class' => 'app\modules\jobs\Module',
        ],
        'system' => [
            'class' => 'app\modules\system\Module',
        ],
    ],
    'components' => [
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'decimalSeparator' => '.',
            'thousandSeparator' => ',',
            // Other formatter options
        ],
        'image' => [
            'class' => 'yii\image\ImageDriver',
            'driver' => 'GD',  //GD or Imagick
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@app/themes/adminlte3',
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'cLBAKGQElUbH-x9gq65eF2adFlAM2G35',
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
        // 'mailer' => [
        //     'class' => 'yii\swiftmailer\Mailer',
        //     // send all mails to a file by default. You have to set
        //     // 'useFileTransport' to false and configure transport
        //     // for the mailer to send real emails.
        //     'useFileTransport' => true,
        // ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            'enablePrettyUrl' => true,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                ['class' => 'yii\rest\UrlRule', 'controller' => 'location', 'except' => ['delete', 'GET', 'HEAD', 'POST', 'OPTIONS'], 'pluralize' => false],
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                // 'export/pdf' => 'export/export-pdf',
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail', // Customize this based on your project structure
            'useFileTransport' => false, // Set this to false to enable email sending
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp-mail.outlook.com', // Hotmail SMTP server
                'username' => 'northernfood.it@hotmail.com', // Your Hotmail/Outlook email address
                'password' => 'Nfc@053673985', // Your Hotmail/Outlook password
                'port' => '587', // The SMTP server port for Hotmail
                'encryption' => 'tls', // Use TLS encryption (required for Hotmail)
            ],
        ],
    ],
    'params' => $params,
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
