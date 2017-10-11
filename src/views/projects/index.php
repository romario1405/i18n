<?php
/**
 * Created by PhpStorm.
 * User: romario
 * Date: 11.10.17
 * Time: 22:31
 */

echo \yii\grid\GridView::widget([
    'dataProvider' => new \yii\data\ActiveDataProvider([
        'query' => \sonrac\i18n\models\Projects::find(),
    ]),
]);