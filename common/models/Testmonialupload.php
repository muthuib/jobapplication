<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testmonialupload".
 *
 * @property int $id
 * @property string $title
 * @property string $qualification_category
 * @property string $file_name_upload
 */
class Testmonialupload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testmonialupload';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'qualification_category'], 'required'],
            [['file_name_upload'], 'file', 'extensions'=>'jpeg,jpg,png,gif'],
            [['title', 'qualification_category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '',
            'qualification_category' => '',
            'file_name_upload' => '',
        ];
    }
}
