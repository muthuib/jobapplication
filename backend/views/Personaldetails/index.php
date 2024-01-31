<?php

use common\models\Personaldetails;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\PersonaldetailsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Personaldetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personaldetails-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Personaldetails', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Surname',
            'Other_Names',
            'Birth_date',
            'created_at',
            //'Birth_Nationality',
            //'Home_County',
            //'Gender',
            //'Present_Nationality',
            //'Physical_challenges',
            //'ID_or_Passport_NO',
            //'Permanent_Address',
            //'Present_Address',
            //'Email:email',
            //'Phone_Number',
            //'Calling_code_nationality',
            //'Work_Phone_Number',
            //'Home_Phone_Number',
            //'Cell_Phone_Number',
            //'Ethnic_group',
            //'Are_you_an_employee_of_the_university_of_Nairobi:ntext',
            //'Payroll_number',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Personaldetails $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
