<?php

use common\models\Employment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Employment History';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Employment History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'specialization_AREA',
            'job_title',
            'institution',
            'number_supervised',
            //'employee_supervision_details',
            //'currency',
            //'start_date',
            //'end_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Employment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
