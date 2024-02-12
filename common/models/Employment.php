<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employment".
 *
 * @property int $id
 * @property string $specialization_AREA
 * @property string $job_title
 * @property string $institution
 * @property int|null $number_supervised
 * @property string $employee_supervision_details
 * @property int $currency
 * @property string $start_date
 * @property string $end_date
 */
class Employment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employment';
    }


    public $employment;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['specialization_AREA', 'job_title', 'institution', 'employee_supervision_details', 'currency', 'start_date', 'end_date'], 'required'],
            [['number_supervised'], 'integer'],
            [['currency'],  'string'],
            [['start_date', 'end_date'], 'safe'],
            [['specialization_AREA', 'job_title', 'institution', 'employee_supervision_details'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'specialization_AREA' => 'Specialization Area',
            'job_title' => 'Job Title',
            'institution' => 'Institution',
            'number_supervised' => 'Number Supervised',
            'employee_supervision_details' => 'Employee Supervision Details',
            'currency' => 'currency',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }
}
