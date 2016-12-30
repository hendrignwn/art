<?php

use yii\db\Migration;

/**
 * Handles the creation of table `page_static`.
 */
class m161230_043339_create_page_static_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('page_static', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'type' => $this->string(20)->comment('about|service')->defaultValue('about'),
            'name' => $this->string(150)->notNull(),
            'slug' => $this->string(255)->notNull()->unique(),
            'description' => $this->text()->notNull(),
            'metakey' => $this->string(100)->null(),
            'metadesc' => $this->string(255)->null(),
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
        $this->dropTable('page_static');
    }
}
