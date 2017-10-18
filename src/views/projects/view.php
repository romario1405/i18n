<?php
/**
 * Created by PhpStorm.
 * User: romario
 * Date: 17.10.17
 * Time: 0:28
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
?>

<div class="i18n-projects-view">
    <p>
        <?php echo Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
        <?php echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data'  => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method'  => 'post',
            ]
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model'      => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'domain',
                'format' => 'url',
                'value' => $model->domain,
            ],
            [
                'attribute' => 'is_enable',
                'format' => 'html',
                'value' => $model->getLabels($model->is_enable),
            ],
            [
                'attribute' => 'is_www_redirect',
                'format' => 'html',
                'value' => $model->getLabels($model->is_www_redirect),
            ],
            [
                'attribute' => 'is_maintain_mode',
                'format' => 'html',
                'value' => $model->getLabels($model->is_maintain_mode),
            ],
            'created_at:datetime',
        ],
    ]); ?>
</div>
