<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use common\models\Category;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\testmonialupload $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="testmonialupload-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <table>

<tr>
    <td> Title</td>
    <td> <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?></td>
    
</tr>

<tr>
<td> Qualification Category</td>
  <td>  <?= $form->field($model, 'qualification_category')->dropDownList(ArrayHelper::map(Category::find()->all(), 'category_title', 'category_title'), ['prompt'=>'Select Category']) ?></td>
</tr>

<tr>
<td> File Name Upload</td>
<td><?= $form->field($model, 'file_name_upload')->fileInput() ?></td>
</tr>
    </table>
    <p>
       <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>

    <?= Html::a('Add ', ['create'], ['class' => 'btn btn-success']) ?>
</p>
</div>
    <?php ActiveForm::end(); ?>

    <style>
table {
  font-family: arial, sans-serif;
 
  width: 70%;
  border: 1px blue;
 
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
h1 {
font-size: 20px;
  text-align: center;
  padding: 8px;
  background-color: blue;
  color: white;
  width: 70%;
}

tr:nth-child(even) {
  background-color: ;
}
p{
    text-align: left;
}
</style>