<?php

use yii\db\Migration;

/**
 * Handles the creation of table `config`.
 */
class m161205_082927_create_config_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('config', [
            'name' => $this->char(100)->unique()->notNull(),
            'value' => $this->text()->notNull(),
            'label' => $this->string(255)->null(),
            'notes' => $this->string(255)->null(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('config');
    }
}
