<?php
/**
 * Created by PhpStorm.
 * User: romario
 * Date: 17.10.17
 * Time: 0:28
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form \yii\widgets\ActiveForm */
?>

<div class="i18n-projects-form">
    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'domain')->textInput(); ?>
    <?php echo $form->field($model, 'is_enable')->checkbox(); ?>
    <?php echo $form->field($model, 'is_www_redirect')->checkbox(); ?>
    <?php echo $form->field($model, 'is_maintain_mode')->checkbox(); ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
