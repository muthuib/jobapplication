<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Products $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <table>

        <tr>
            <th>Product Name </th>
            <th>Product Qty </th>
            <th>Product Price </th>
</tr>
<?php foreach ($prts as $index => $product) { ?>
    <tr>
        <td><?= $form->field($product, "[$index]product_name")->textInput(['maxlength' => true])->label(FALSE)?></td>
         <td><?= $form->field($product, "[$index]product_quantity")->textInput()->label(FALSE)?></td>
         <td><?= $form->field($product, "[$index]product_price")->textInput(['maxlength' => true])->label(FALSE)?></td>
</tr>
<?php } ?>
</table>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

tr {
  border-bottom: 1px solid #ddd;
}
table {
  width: 100%;
 
}

h1 {
background-color: rgba(0, 0, 255, 0.5);
color: white;
text-align: center;
}
th {
background-color: rgba(0, 0, 255, 0.5);
color: black;
text-align: center;
}
</style>

