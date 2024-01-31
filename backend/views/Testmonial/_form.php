<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Testmonial $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="testmonial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'degree_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institution_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'testimonial')->textInput() ?>
   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
