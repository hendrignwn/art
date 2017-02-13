<?php

use app\migrations\Migration;

/**
 * Handles the creation of table `scheduled_email`.
 */
class m170213_143807_create_scheduled_email_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('scheduled_email', [
            'id' => $this->primaryKey(),
            'category' => $this->smallInteger()->notNull()->defaultValue(1),
            'subject' => $this->string(255)->notNull(),
            'body' => $this->text()->notNull(),
            'photo' => $this->string(100)->null(),
            'send_date' => $this->date()->notNull(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer()->null(),
            'updated_by' => $this->integer()->null(),
        ], $this->tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('scheduled_email');
    }
}
