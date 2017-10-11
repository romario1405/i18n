<?php
// Here you can initialize variables that will be available to your tests
\sonrac\i18n\tests\application\boot\StartYii2Application::getInstance()->stop();
\sonrac\i18n\tests\application\boot\StartYii2Application::getInstance()->start();
\sonrac\i18n\tests\application\boot\StartSelenium::getInstance()->stop();
\sonrac\i18n\tests\application\boot\StartSelenium::getInstance()->start();
sleep(2);