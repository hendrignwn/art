<?php

use app\migrations\Migration;

/**
 * Handles the creation of table `blog_post`.
 */
class m170123_024506_create_blog_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('blog_post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(128)->notNull()->unique(),
            'slug' => $this->string(128)->notNull()->unique(),
            'photo' => $this->string(100)->null(),
            'post_date' => $this->dateTime()->notNull(),
            'lead_text' => $this->text()->null(),
            'content' => $this->text()->notNull(),
            'metakey' => $this->string(150)->null(),
            'metadesc' => $this->string(160)->null(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
            'created_by' => $this->integer()->null(),
            'updated_by' => $this->integer()->null(),
            'blog_category_id' => $this->integer()->notNull(),
        ], $this->tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('blog_post');
    }
}
