<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Products $model */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'prts' => $prts
    ]) ?>

</div>
