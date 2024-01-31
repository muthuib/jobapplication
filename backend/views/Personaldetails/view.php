<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Personaldetails $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Personaldetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personaldetails-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Surname',
            'Other_Names',
            'Birth_date',
            'created_at',
            'Birth_Nationality',
            'Home_County',
            'Gender',
            'Present_Nationality',
            'Physical_challenges',
            'ID_or_Passport_NO',
            'Permanent_Address',
            'Present_Address',
            'Email:email',
            'Phone_Number',
            'Calling_code_nationality',
            'Work_Phone_Number',
            'Home_Phone_Number',
            'Cell_Phone_Number',
            'Ethnic_group',
            'Are_you_an_employee_of_the_university_of_Nairobi:ntext',
            'Payroll_number',
        ],
    ]) ?>

</div>
