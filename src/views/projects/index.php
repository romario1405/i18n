<?php
/**
 * Created by PhpStorm.
 * User: romario
 * Date: 11.10.17
 * Time: 22:31
 */

use yii\data\ActiveDataProvider;
use \sonrac\i18n\models\search\ProjectsRepository;
use yii\grid\GridView;
use yii\helpers\Html;

/**
 * @var $projectsDataProvider ActiveDataProvider
 * @var $projectsRepository ProjectsRepository
 */
?>

<div class="i18n-projects-index">
    <p><?php echo Html::a('Create Project', ['create'], ['class' => 'btn btn-success']); ?></p>

    <?php echo GridView::widget([
        'dataProvider' => $projectsDataProvider,
        'filterModel' => $projectsRepository,
        'columns' => [
            [
                'attribute' => 'id',
            ],
            [
                'attribute' => 'domain',
                'value' => function ($model) {
                    return $model->domain;
                },
                'format' => 'url',
            ],
            [
                'attribute' => 'is_enable',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->getLabels($model->is_enable);
                }
            ],
            [
                'attribute' => 'is_www_redirect',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->getLabels($model->is_www_redirect);
                }
            ],
            [
                'attribute' => 'is_maintain_mode',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->getLabels($model->is_maintain_mode);
                }
            ],
            'created_at:datetime',
            'deleted_at:datetime',
            [
                'class'    => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
            ],
        ],
    ]); ?>
</div>