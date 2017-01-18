<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menu`.
 */
class m170117_084511_create_menu_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->null(),
            'name' => $this->string(100)->notNull(),
            'url' => $this->string(255)->notNull()->unique(),
            'is_absolute_url' => $this->smallInteger()->notNull()->defaultValue(0),
            'option' => $this->text()->null(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'order' => $this->integer()->notNull(),
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
        $this->dropTable('menu');
    }
}
