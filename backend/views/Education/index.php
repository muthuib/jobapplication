<?php

use common\models\education;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Applicant Education Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="education-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Education details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Specialization',
            'Degree_Name',
            'Institution_Name',
            [
                'attribute'=>'startdate',
                'value'=>'startdate',
                'format'=>'raw',
                'filter'=>DatePicker::widget([
                    'model' => $searchmodel,
                    'attribute' => 'startdate',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-m-d'
                        ]
                        ]),
                    ],
           
            //'End_date',
            //'created_at',
            //'Institution_Nationality',
            //'Qualification_Level',
            //'Gender',
            //'Grade_Attained',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, education $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
