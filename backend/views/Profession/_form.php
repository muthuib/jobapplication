<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Profession $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="profession-form">

<?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'certificate_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_year')->textInput() ?>

    <?= $form->field($model, 'testmonial_upload')->fileInput() ?>

  

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
