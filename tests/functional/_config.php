<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii
 * Date: 4/4/17
 * Time: 2:49 PM
 */

use sonrac\i18n\tests\application\boot\Boot;

Yii::setAlias('@bower', __DIR__ . '/../../vendor/bower-asset');
Yii::setAlias('@tests', __DIR__ . '/../');

$config = [
    'id'                  => 'test',
    'basePath'            => __DIR__ . '/../../src',
    'runtimePath'         => __DIR__ . '/../../tests/_output',
    'bootstrap'           => [Boot::class],
    'vendorPath'          => __DIR__ . '/../../vendor',
    'components'          => [
        'urlManager'   => [
            'showScriptName'      => false,
            'enablePrettyUrl'     => true,
            'enableStrictParsing' => false,
        ],
        'assetManager' => [
            'linkAssets' => true,
            'forceCopy'  => true,
        ],
        'db'           => require __DIR__ . '/../_db.php',
        'request'      => [
//            'cookieValidationKey' => 'asdasdasd',
        ],
        'i18n'         => [
            'translations' => [
                'sonrac-relations' => [
                    'class'          => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath'       => __DIR__ . '/../../src/messages',
                ],
            ],
        ],
    ],
    'modules' => [
        'i18n' => [
            'class' => \sonrac\i18n\Module::class,
        ],
    ],
];

return $config;