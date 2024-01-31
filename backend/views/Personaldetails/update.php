<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Personaldetails $model */

$this->title = 'Update Personaldetails: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Personaldetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="personaldetails-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
