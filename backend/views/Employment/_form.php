<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\jui\DatePicker;

/** @var yii\web\View $this */
/** @var common\models\Employment $emp */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="employment-form">

    <?php $form = ActiveForm::begin();?>
   

    <table frame="box">
        <tr>
            <td>Specialization Area </td>
            <td>Job Title </td>
            <td>Institution </td>
            <td>Number supervised </td>
            <td>Employee Supervision Details </td>
            <td>Currency </td>
            <td>Start date</td>
            <td>End date</td>
           
</tr>
<?php foreach ($emp as $index => $employment) { ?>
    <tr>
        <td><?= $form->field($employment, "[$index]specialization_AREA")->textInput(['maxlength' => true])->label(FALSE)?></td>
         <td><?= $form->field($employment, "[$index]job_title")->textInput(['maxlength' => true])->label(FALSE)?></td>
         <td><?= $form->field($employment, "[$index]institution")->textInput(['maxlength' => true])->label(FALSE)?></td>
         <td><?= $form->field($employment, "[$index]number_supervised")->textInput()->label(FALSE)?></td>
         <td><?= $form->field($employment, "[$index]employee_supervision_details")->textInput(['maxlength' => true])->label(FALSE)?></td>
         <td><?= $form->field($employment, "[$index]currency")->radioList( ['ksh'=>'ksh', 'usd' => 'usd'] )->label(FALSE)?>
        <td> <?= $form->field($employment, "[$index]start_date")->widget(DatePicker::className())->label(FALSE)?></td>
        <td> <?= $form->field($employment, "[$index]end_date")->widget(DatePicker::className())->label(FALSE)?></td>
         
</tr>

<?php } ?>
</table>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<style>
    p {
  background-color: yellow;
  max-width: 20px;
}

</style>



