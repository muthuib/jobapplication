<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Employment $emp */

$this->title = 'Add Employment History';
$this->params['breadcrumbs'][] = ['label' => 'Employments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'emp' => $emp
    ]) ?>

</div>
