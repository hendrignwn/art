<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gallery`.
 */
class m161230_042633_create_portfolio_has_picture_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('portfolio_has_picture', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'portfolio_id' => $this->integer()->notNull(),
            'picture' => $this->string(255)->notNull(),
            'description' => $this->text()->null(),
            'is_active' => $this->smallInteger()->notNull()->defaultValue(0),
            'status' => $this->smalLInteger()->defaultValue(1),
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
        $this->dropTable('portfolio_has_picture');
    }
}
