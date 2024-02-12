<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use dosamigos\datepicker\DatePicker;

/** @var yii\web\View $this */
/** @var common\models\education $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="education-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Specialization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Degree_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Institution_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Startdate')->widget(
DatePicker::className(), [
    'inline'=>false,
    'clientOptions' => [
             'autoclose' => true,
            'format' => 'yyyy-m-d'
    ]
    ]); ?>



    <?= $form->field($model, 'End_date')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'Institution_Nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Qualification_Level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Grade_Attained')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
