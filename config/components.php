<?php
/**
 * Created by PhpStorm.
 * User: mackie
 * Date: 17-6-9
 * Time: 上午11:28
 */

return [
    'request' => [
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => 'vWg8HfQ3QMXHw5p831QabaEydNCR0j8p',
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
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.sina.com',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
            'username' => 'mq_cd520@sina.com',
            'password' => 'mouqi15115771640',
            'port' => '25', // Port 25 is a very common port too
            'encryption' => 'tls', // It is often used, check your provider or mail server specs
        ],
        'useFileTransport' => false,
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'flushInterval' => 1,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                //'logFile' => '/home/mackie/git/myapp/runtime/log',
                'levels' => ['info', 'error', 'warning'],
                'logVars' => [],
                //'exportInterval' => 1,
            ],

            'email' => [
                'class' => 'yii\log\EmailTarget',
                'mailer' => 'mailer',
                'except' => ['yii\web\HttpException:404'],
                'levels' => ['info', 'error', 'warning'],
                'logVars' => [],
                'message' => ['from' => 'mq_cd520@sina.com', 'to' => 'mouqi562315905@qq.com'],
            ],
        ],
    ],
    'db' => $db,

    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
        ],
    ],

];