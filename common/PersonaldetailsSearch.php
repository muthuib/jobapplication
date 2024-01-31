<?php

namespace common;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Personaldetails;

/**
 * PersonaldetailsSearch represents the model behind the search form of `common\models\Personaldetails`.
 */
class PersonaldetailsSearch extends Personaldetails
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'ID_or_Passport_NO', 'Phone_Number', 'Work_Phone_Number', 'Home_Phone_Number', 'Cell_Phone_Number', 'Payroll_number'], 'integer'],
            [['Surname', 'Other_Names', 'Birth_date', 'Birth_Nationality', 'Home_County', 'Gender', 'Present_Nationality', 'Physical_challenges', 'Permanent_Address', 'Present_Address', 'Email', 'Calling_code_nationality', 'Ethnic_group', 'Are_you_an_employee_of_the_university_of_Nairobi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Personaldetails::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Birth_date' => $this->Birth_date,
            'created_at' => $this->created_at,
            'ID_or_Passport_NO' => $this->ID_or_Passport_NO,
            'Phone_Number' => $this->Phone_Number,
            'Work_Phone_Number' => $this->Work_Phone_Number,
            'Home_Phone_Number' => $this->Home_Phone_Number,
            'Cell_Phone_Number' => $this->Cell_Phone_Number,
            'Payroll_number' => $this->Payroll_number,
        ]);

        $query->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'Other_Names', $this->Other_Names])
            ->andFilterWhere(['like', 'Birth_Nationality', $this->Birth_Nationality])
            ->andFilterWhere(['like', 'Home_County', $this->Home_County])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Present_Nationality', $this->Present_Nationality])
            ->andFilterWhere(['like', 'Physical_challenges', $this->Physical_challenges])
            ->andFilterWhere(['like', 'Permanent_Address', $this->Permanent_Address])
            ->andFilterWhere(['like', 'Present_Address', $this->Present_Address])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Calling_code_nationality', $this->Calling_code_nationality])
            ->andFilterWhere(['like', 'Ethnic_group', $this->Ethnic_group])
            ->andFilterWhere(['like', 'Are_you_an_employee_of_the_university_of_Nairobi', $this->Are_you_an_employee_of_the_university_of_Nairobi]);

        return $dataProvider;
    }
}
