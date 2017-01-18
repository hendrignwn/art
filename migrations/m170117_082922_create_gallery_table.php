<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gallery`.
 */
class m170117_082922_create_gallery_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('gallery', [
            'id' => $this->primaryKey(),
            'portfolio_id' => $this->integer()->notNull(),
            'name' => $this->string(200)->notNull(),
            'photo' => $this->string(255)->notNull(),
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
    public function safeDown()
    {
        $this->dropTable('gallery');
    }
}
