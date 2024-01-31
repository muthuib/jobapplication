<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property string $Specialization
 * @property string $Degree_Name
 * @property string $Institution_Name
 * @property string $Startdate
 * @property string $End_date
 * @property string $created_at
 * @property string $Institution_Nationality
 * @property string $Qualification_Level
 * @property string $Gender
 * @property string $Grade_Attained
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Specialization', 'Degree_Name', 'Institution_Name', 'Startdate', 'End_date', 'Institution_Nationality', 'Qualification_Level', 'Gender', 'Grade_Attained'], 'required'],
            [['Startdate', 'End_date'], 'safe'],
            [['created_at'], 'integer'],
            [['Specialization', 'Degree_Name', 'Institution_Name'], 'string', 'max' => 1024],
            [['Institution_Nationality', 'Qualification_Level', 'Gender', 'Grade_Attained'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Specialization' => 'Specialization',
            'Degree_Name' => 'Degree Name',
            'Institution_Name' => 'Institution Name',
            'Startdate' => 'Startdate',
            'End_date' => 'End Date',
            'created_at' => 'Created At',
            'Institution_Nationality' => 'Institution Nationality',
            'Qualification_Level' => 'Qualification Level',
            'Gender' => 'Gender',
            'Grade_Attained' => 'Grade Attained',
        ];
    }
}
