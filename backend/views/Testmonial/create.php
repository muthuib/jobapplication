<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\testmonial $model */

$this->title = 'Create Testmonial';
$this->params['breadcrumbs'][] = ['label' => 'Testmonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testmonial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
