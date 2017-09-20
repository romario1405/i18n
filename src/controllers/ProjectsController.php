<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 10:03 PM
 */

namespace sonrac\i18n\controllers;

use sonrac\i18n\models\search\ProjectsRepository;
use Yii;

class ProjectsController extends \yii\web\Controller
{
    /**
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\di\NotInstantiableException
     *
     * @author Donii Sergii <doniysa@gmail.com>
     */
    public function actionIndex() {
        $searchModel = Yii::$container->get(ProjectsRepository::class);
    }
}