<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $product_name
 * @property int $product_quantity
 * @property float $product_price
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }




    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_quantity', 'product_price'], 'required'],
            [['product_quantity'], 'integer'],
            [['product_price'], 'number'],
            [['product_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'product_quantity' => 'Product Quantity',
            'product_price' => 'Product Price',
        ];
    }
}
