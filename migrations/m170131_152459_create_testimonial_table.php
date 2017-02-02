<?php

use yii\db\Migration;

/**
 * Handles the creation of table `testimonial`.
 */
class m170131_152459_create_testimonial_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('testimonial', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'description' => $this->string(255)->notNull(),
            'professional' => $this->string(80)->null(),
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
    public function safeDown()
    {
        $this->dropTable('testimonial');
    }
}
