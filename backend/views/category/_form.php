<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\category $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_entered_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
