<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\testmonialupload $model */

$this->title = 'Add your testmonial';
$this->params['breadcrumbs'][] = ['label' => 'Testmonialuploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testmonialupload-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
