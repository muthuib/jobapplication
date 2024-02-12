<?php

use yii\db\Migration;

/**
 * Class m240208_045241_products
 */
class m240208_045241_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'product_name' => $this->string()->notNull(),
            'product_quantity' => $this->integer()->notNull(),
            'product_price' => $this->decimal(5,2)->notNull() 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240208_045241_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240208_045241_products cannot be reverted.\n";

        return false;
    }
    */
}
