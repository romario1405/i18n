<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 9:59 PM
 */

namespace sonrac\i18n;

use sonrac\i18n\contracts\Projects as IProjects;
use sonrac\i18n\contracts\ProjectsRepositoryInterface;
use sonrac\i18n\models\Projects;
use sonrac\i18n\models\search\ProjectsRepository;
use Yii;

/**
 * Class Module
 * I18n Module
 *
 * @package sonrac\i18n
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 */
class Module extends \yii\base\Module
{
    public function init() {

    }

    /**
     * Added not existing contracts for module
     *
     * @author Donii Sergii <doniysa@gmail.com>
     */
    protected function initContracts() {
        if (!Yii::$container->has(IProjects::class)) {
            Yii::$container->set(IProjects::class, Projects::class);
        }

        if (!Yii::$container->has(ProjectsRepositoryInterface::class)) {
            Yii::$container->set(ProjectsRepositoryInterface::class, ProjectsRepository::class);
        }
    }
}