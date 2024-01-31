<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Personaldetails $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="personaldetails-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Birth_date')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'Birth_Nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Home_County')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Present_Nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Physical_challenges')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_or_Passport_NO')->textInput() ?>

    <?= $form->field($model, 'Permanent_Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Present_Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Phone_Number')->textInput() ?>

    <?= $form->field($model, 'Calling_code_nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Work_Phone_Number')->textInput() ?>

    <?= $form->field($model, 'Home_Phone_Number')->textInput() ?>

    <?= $form->field($model, 'Cell_Phone_Number')->textInput() ?>

    <?= $form->field($model, 'Ethnic_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Are_you_an_employee_of_the_university_of_Nairobi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Payroll_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
