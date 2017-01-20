<?php

use yii\db\Migration;

/**
 * Handles the creation of table `partner`.
 */
class m170120_070238_create_client_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('client', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'website' => $this->string(100)->notNull(),
            'photo' => $this->string(255)->notNull()->comment('logo'),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer()->null(),
            'updated_by' => $this->integer()->null(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('client');
    }
}
