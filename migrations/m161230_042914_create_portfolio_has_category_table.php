<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portfolio_has_category`.
 */
class m161230_042914_create_portfolio_has_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('portfolio_has_category', [
            'id' => $this->primaryKey(),
            'portfolio_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
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
        $this->dropTable('portfolio_has_category');
    }
}
