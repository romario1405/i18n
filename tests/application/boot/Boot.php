<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii
 * Date: 4/4/17
 * Time: 1:32 PM
 */

namespace sonrac\i18n\tests\application\boot;

use sonrac\relations\tests\application\migrations\CreateTestTables;
use yii\base\BootstrapInterface;

/**
 * Class Boot
 * Init database
 *
 * @package sonrac\relations\tests\application\boot
 */
class Boot implements BootstrapInterface
{
    /**
     * @inheritDoc
     */
    public function bootstrap($app)
    {
        \Yii::setAlias('@sonracI18n', __DIR__ . '/../../../src');
//        ob_start();
//        $migration = new CreateTestTables();
//        $migration->up();
//        ob_clean();
    }

}