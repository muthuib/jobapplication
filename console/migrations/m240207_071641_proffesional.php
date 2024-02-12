<?php

use yii\db\Migration;

/**
 * Class m240207_071641_proffesional
 */
class m240207_071641_proffesional extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%professional}}', [
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
        echo "m240207_071641_proffesional cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240207_071641_proffesional cannot be reverted.\n";

        return false;
    }
    */
}
