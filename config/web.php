<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
    	'urlManager' => [
    		'enablePrettyUrl' => true,
    		'showScriptName' => false,
    		'rules' => [
    			'game' => 'site/index',
    		],
    	],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'sIjit6rgBaeqWuYbINsb5WeR5_TDnY7-',
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
        'assetManager' => [
        		'bundles' => [
        			// use bootstrap css from CDN
        			'yii\bootstrap\BootstrapAsset' => [
        				'sourcePath' => null,   // do not use file from our server
        				'css' => [
        					'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css']
       				 	],
        			// use bootstrap js from CDN
        			'yii\bootstrap\BootstrapPluginAsset' => [
        				'sourcePath' => null,   // do not use file from our server
        				'js' => [
        					'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js']
        				],
        			// use jquery from CDN
        			'yii\web\JqueryAsset' => [
        				'sourcePath' => null,   // do not publish the bundle
        				'js' => [
        					'//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
        				]
        			],
        		],
        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
