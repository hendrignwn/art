<?php

use yii\db\Migration;

/**
 * Handles the creation of table `main_menu`.
 */
class m161230_021618_create_main_menu_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%main_menu}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'category' => $this->string(20)->comment('landing|main|admin')->notNull(),
            'parent' => $this->integer(),
            'route' => $this->string()->notNull(),
            'order' => $this->integer(),
            'data' => $this->binary()->null(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->datetime()->null(),
            'updated_at' => $this->datetime()->null(),
            'created_by' => $this->integer()->null(),
            'updated_by' => $this->integer()->null(),
            "FOREIGN KEY ([[parent]]) REFERENCES {{%main_menu}}([[id]]) ON DELETE SET NULL ON UPDATE CASCADE",
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%main_menu}}');
    }
}
