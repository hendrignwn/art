<?php

use app\migrations\Migration;

/**
 * Handles the creation of table `team`.
 */
class m170117_083418_create_team_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('team', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(30)->notNull(),
            'last_name' => $this->string(50)->notNull(),
            'professional' => $this->string(100)->notNull(),
            'photo' => $this->string(255)->notNull(),
            'social_account' => $this->string(255)->null(),
            'description' => $this->text()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
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
        $this->dropTable('team');
    }
}
