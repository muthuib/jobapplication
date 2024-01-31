<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Personaldetails $model */

$this->title = 'Create Personaldetails';
$this->params['breadcrumbs'][] = ['label' => 'Personaldetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personaldetails-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
