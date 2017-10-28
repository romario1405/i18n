<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 4/3/17
 * Time: 21:10
 *
 * @author Doniy Serhey <doniysa@gmail.com>
 */
Yii::setAlias('@tests', __DIR__ . '/../');

use sonrac\i18n\tests\application\boot\Boot;

$config = [
    'id'                  => 'test',
    'basePath'            => __DIR__ . '/../../src',
    'runtimePath'         => __DIR__ . '/../../tests/_output',
    'bootstrap'           => [Boot::class],
    'vendorPath'          => __DIR__ . '/../../vendor',
    'components'          => [
        'user' => [
            'identityClass' => UserModel::class,
        ],
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