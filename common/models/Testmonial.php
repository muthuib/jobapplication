<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testmonial".
 *
 * @property int $id
 * @property string $degree_name
 * @property string $institution_name
 * @property resource $testmonial
 */
class Testmonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testmonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['degree_name', 'institution_name'], 'required'],
            [['testmonial'], 'file', 'extensions'=>'jpeg,jpg,png,gif'],
            [['degree_name', 'institution_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'degree_name' => 'Degree Name',
            'institution_name' => 'Institution Name',
            'testmonial' => 'Upload Testmonial',
        ];
    }
}
