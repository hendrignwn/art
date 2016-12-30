<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portfolio_category`.
 */
class m161230_034918_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(150)->notNull(),
            'slug' => $this->string(255)->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'order' => $this->integer()->notNull()->defaultValue(0),
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
        $this->dropTable('category');
    }
}
