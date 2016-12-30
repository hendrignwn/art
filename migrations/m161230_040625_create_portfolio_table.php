<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portfolio`.
 */
class m161230_040625_create_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('portfolio', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'slug' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'client' => $this->string(100)->notNull(),
            'website' => $this->string(100)->notNull(),
            'project_duration' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->defaultValue(1),
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
        $this->dropTable('portfolio');
    }
}
