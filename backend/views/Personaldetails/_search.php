<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\PersonaldetailsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="personaldetails-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Surname') ?>

    <?= $form->field($model, 'Other_Names') ?>

    <?= $form->field($model, 'Birth_date') ?>

    <?= $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'Birth_Nationality') ?>

    <?php // echo $form->field($model, 'Home_County') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <?php // echo $form->field($model, 'Present_Nationality') ?>

    <?php // echo $form->field($model, 'Physical_challenges') ?>

    <?php // echo $form->field($model, 'ID_or_Passport_NO') ?>

    <?php // echo $form->field($model, 'Permanent_Address') ?>

    <?php // echo $form->field($model, 'Present_Address') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Phone_Number') ?>

    <?php // echo $form->field($model, 'Calling_code_nationality') ?>

    <?php // echo $form->field($model, 'Work_Phone_Number') ?>

    <?php // echo $form->field($model, 'Home_Phone_Number') ?>

    <?php // echo $form->field($model, 'Cell_Phone_Number') ?>

    <?php // echo $form->field($model, 'Ethnic_group') ?>

    <?php // echo $form->field($model, 'Are_you_an_employee_of_the_university_of_Nairobi') ?>

    <?php // echo $form->field($model, 'Payroll_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
