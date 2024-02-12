<?php

use yii\db\Migration;

/**
 * Class m240207_113330_upload
 */
class m240207_113330_upload extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profession}}', [
            'id' => $this->primaryKey(),
            'certificate_name' => $this->string()->notNull(),
            'certificate_year' => $this->integer(4)->notNull(),
            'testmonial_upload' => $this->string()->notNull(),
            'upload_id' => $this->text(512)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240207_113330_upload cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240207_113330_upload cannot be reverted.\n";

        return false;
    }
    */
}
