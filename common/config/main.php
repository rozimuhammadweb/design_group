<?php

use yii\caching\FileCache;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'treemanager' =>  [
            'class' => '\kartik\tree\Module',
            // other module settings, refer detailed documentation
        ],
        'menumanager' => [
            'class' => 'backend\modules\menumanager\Module'
        ],
    ],
    'components' => [
        'cache' => [
            'class' => FileCache::class,
        ],
        // last
//        'i18n' => [
//            'translations' => [
//                'site*' => [
//                    'class' => 'yii\i18n\PhpMessageSource',
//                    'basePath' => '@soft/i18n/messages',
//                    'fileMap' => [
//                        'site' => 'site.php',
//                    ],
//                ],
//
//                'app*' => [
//                    'class' => 'yii\i18n\DbMessageSource',
//                ],
//
//            ],
//        ],
    ],
];
