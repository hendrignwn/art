<?php

use app\migrations\Migration;

/**
 * Handles the creation of table `portfolio`.
 */
class m170117_082448_create_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('portfolio', [
            'id' => $this->primaryKey(),
            'service_id' => $this->integer()->notNull(),
            'name' => $this->string(200)->notNull(),
            'slug' => $this->string(255)->null()->unique(),
            'completed_on' => $this->date()->notNull(),
            'client' => $this->string(255)->notNull(),
            'website' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'metakey' => $this->string(200)->null(),
            'metadesc' => $this->string(255)->null(),
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
        $this->dropTable('portfolio');
    }
}
