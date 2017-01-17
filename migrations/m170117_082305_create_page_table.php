<?php

use yii\db\Migration;

/**
 * Handles the creation of table `page`.
 */
class m170117_082305_create_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('page', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
            'slug' => $this->string(255)->null()->unique(),
            'category' => $this->integer()->notNull()->comment('1=static;2=partial'),
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
        $this->dropTable('page');
    }
}
