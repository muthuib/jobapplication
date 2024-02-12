<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "professional".
 *
 * @property int $id
 * @property string $certificate_name
 * @property int $certificate_year
 * @property string $testmonial_upload
 * @property string $upload_id
 */
class Professional extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'professional';
    }

    /**
     * {@inheritdoc}
     */

     
    public function rules()
    {
        return [
            [['certificate_name', 'certificate_year', 'upload_id'], 'required'],
            [['certificate_year'], 'integer'],
            [['upload_id'], 'string'],
            [['testmonial_upload'], 'file', 'extensions'=>'jpeg,jpg,png,gif'],
            [['certificate_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'certificate_name' => 'Certificate Name',
            'certificate_year' => 'Certificate Year',
            'testmonial_upload' => 'Testmonial Upload',
            'upload_id' => 'Upload ID',
        ];
    }
}
