<?php

namespace sonrac\relations\tests\unit;

use Codeception\Test\Unit;
use PHPUnit\Framework\TestCase;
use sonrac\i18n\models\Projects;
use yii;

/**
 * Class RelationInitTest
 * Relation trait test
 *
 */
class SimpleUnitTest extends Unit
{
    public function testRules()
    {
        $this->assertTrue(is_array((new Projects())->rules()));
    }
}