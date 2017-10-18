<?php
/**
 * Created by PhpStorm.
 * User: Donii Sergii <doniysa@gmail.com>
 * Date: 9/20/17
 * Time: 10:03 PM
 */

namespace sonrac\i18n\controllers;


use yii\web\Controller;
use Yii;
use yii\web\NotFoundHttpException;

class ProjectsController extends Controller
{
    public function actionIndex() {
        $projectsRepository = Yii::$container->get('sonrac\i18n\contracts\ProjectsRepositoryInterface');
        $projectsDataProvider = $projectsRepository->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'projectsDataProvider' => $projectsDataProvider,
            'projectsRepository' => $projectsRepository,
        ]);
    }

    public function actionCreate() {
        $model = Yii::$container->get('sonrac\i18n\contracts\ProjectsInterface');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Yii::$container->get('sonrac\i18n\contracts\ProjectsInterface')::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}