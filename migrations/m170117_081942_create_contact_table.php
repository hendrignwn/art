<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m170117_081942_create_contact_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'title_id' => $this->smallInteger()->notNull(),
            'first_name' => $this->string(30)->notNull(),
            'last_name' => $this->string(50)->notNull(),
            'email' => $this->string(100)->notNull(),
            'phone' => $this->string(15)->notNull(),
            'subject' => $this->string(150)->notNull(),
            'description' => $this->text()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
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
