<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 10:03 PM
 */

namespace sonrac\i18n\controllers;


use sonrac\i18n\models\Projects;
use Yii;

class ProjectsController extends \yii\web\Controller
{
    public function actionIndex() {
        $projectsRepository = Yii::$container->get('sonrac\i18n\contracts\ProjectsRepositoryInterface');
        $projectsDataProvider = $projectsRepository->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'projectsDataProvider' => $projectsDataProvider,
            'projectsRepository' => $projectsRepository,
        ]);
    }
}