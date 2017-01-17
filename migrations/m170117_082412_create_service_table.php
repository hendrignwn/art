<?php

use yii\db\Migration;

/**
 * Handles the creation of table `service`.
 */
class m170117_082412_create_service_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('service', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
            'slug' => $this->string(255)->null()->unique(),
            'description' => $this->text()->notNull(),
            'metakey' => $this->string(200)->null(),
            'metadesc' => $this->string(255)->null(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
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
        $this->dropTable('service');
    }
}
