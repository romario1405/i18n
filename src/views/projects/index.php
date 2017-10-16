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

/**
 * @var $projectsDataProvider ActiveDataProvider
 * @var $projectsRepository ProjectsRepository
 */

echo GridView::widget([
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
            }
        ],
        [
            'attribute' => 'is_enable',
        ],
        [
            'attribute' => 'is_www_redirect',
        ],
        [
            'attribute' => 'is_maintain_mode',
        ],
        [
            'attribute' => 'is_enable',
        ],
        [
            'attribute' => 'created_at',
        ],
        [
            'attribute' => 'deleted_at',
        ],
        [
            'class'    => 'yii\grid\ActionColumn',
            'template' => '{view}{delete}',
        ],
    ],
]);