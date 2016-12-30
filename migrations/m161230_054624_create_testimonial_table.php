<?php

use yii\db\Migration;

/**
 * Handles the creation of table `testimonial`.
 */
class m161230_054624_create_testimonial_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('testimonial', [
            'id' => $this->primaryKey(),
            'title_id' => $this->smallInteger()->null(),
            'first_name' => $this->string(40)->notNull(),
            'last_name' => $this->string(50)->null(),
            'picture' => $this->string(255)->notNull(),
            'description' => $this->string(255)->null(),
            'title' => $this->string(100)->comment('gelar')->notNull(),
            'company' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->defaultValue(1),
            'order' => $this->integer()->defaultValue(1),
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
        $this->dropTable('testimonial');
    }
}
