<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $category_id
 * @property string $category_title
 * @property string $category_description
 * @property string $category_status
 * @property string $category_entered_date
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_title', 'category_description', 'category_status'], 'required'],
            [['category_entered_date'], 'safe'],
            [['category_title', 'category_description', 'category_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_title' => 'Category Title',
            'category_description' => 'Category Description',
            'category_status' => 'Category Status',
            'category_entered_date' => 'Category Entered Date',
        ];
    }
}
