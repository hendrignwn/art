<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m161230_055047_create_contact_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'title_id' => $this->smallInteger()->null(),
            'first_name' => $this->string(40)->notNull(),
            'last_name' => $this->string(50)->null(),
            'email' => $this->string(100)->notNull(),
            'phone' => $this->string(255)->null(),
            'message' => $this->text()->notNull(),
            'status' => $this->smallInteger()->defaultValue(1),
            'reply_description' => $this->text()->null(),
            'created_at' => $this->datetime()->null(),
            'updated_at' => $this->datetime()->null(),
            'created_by' => $this->integer()->null(),
            'updated_by' => $this->integer()->null(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }
}
