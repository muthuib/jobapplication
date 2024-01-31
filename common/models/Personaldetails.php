<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "personaldetails".
 *
 * @property int $id
 * @property string $Surname
 * @property string $Other_Names
 * @property string $Birth_date
 * @property int|null $created_at
 * @property string $Birth_Nationality
 * @property string $Home_County
 * @property string $Gender
 * @property string $Present_Nationality
 * @property string $Physical_challenges
 * @property int $ID_or_Passport_NO
 * @property string $Permanent_Address
 * @property string $Present_Address
 * @property string $Email
 * @property int $Phone_Number
 * @property string $Calling_code_nationality
 * @property int $Work_Phone_Number
 * @property int $Home_Phone_Number
 * @property int $Cell_Phone_Number
 * @property string $Ethnic_group
 * @property string $Are_you_an_employee_of_the_university_of_Nairobi
 * @property int $Payroll_number
 */
class Personaldetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personaldetails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Surname', 'Other_Names', 'Birth_date', 'Birth_Nationality', 'Home_County', 'Gender', 'Present_Nationality', 'Physical_challenges', 'ID_or_Passport_NO', 'Permanent_Address', 'Present_Address', 'Email', 'Phone_Number', 'Calling_code_nationality', 'Work_Phone_Number', 'Home_Phone_Number', 'Cell_Phone_Number', 'Ethnic_group', 'Are_you_an_employee_of_the_university_of_Nairobi', 'Payroll_number'], 'required'],
            [['Birth_date'], 'safe'],
            [['created_at', 'ID_or_Passport_NO', 'Phone_Number', 'Work_Phone_Number', 'Home_Phone_Number', 'Cell_Phone_Number', 'Payroll_number'], 'integer'],
            [['Are_you_an_employee_of_the_university_of_Nairobi'], 'string'],
            [['Surname', 'Other_Names'], 'string', 'max' => 1024],
            [['Birth_Nationality', 'Home_County', 'Gender', 'Present_Nationality', 'Physical_challenges', 'Permanent_Address', 'Present_Address', 'Email', 'Calling_code_nationality', 'Ethnic_group'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Surname' => 'Surname',
            'Other_Names' => 'Other Names',
            'Birth_date' => 'Birth Date',
            'created_at' => 'Created At',
            'Birth_Nationality' => 'Birth Nationality',
            'Home_County' => 'Home County',
            'Gender' => 'Gender',
            'Present_Nationality' => 'Present Nationality',
            'Physical_challenges' => 'Physical Challenges',
            'ID_or_Passport_NO' => 'Id Or Passport No',
            'Permanent_Address' => 'Permanent Address',
            'Present_Address' => 'Present Address',
            'Email' => 'Email',
            'Phone_Number' => 'Phone Number',
            'Calling_code_nationality' => 'Calling Code Nationality',
            'Work_Phone_Number' => 'Work Phone Number',
            'Home_Phone_Number' => 'Home Phone Number',
            'Cell_Phone_Number' => 'Cell Phone Number',
            'Ethnic_group' => 'Ethnic Group',
            'Are_you_an_employee_of_the_university_of_Nairobi' => 'Are You An Employee Of The University Of Nairobi',
            'Payroll_number' => 'Payroll Number',
        ];
    }
}
