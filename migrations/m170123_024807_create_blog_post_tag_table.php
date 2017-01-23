<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blog_post_tag`.
 */
class m170123_024807_create_blog_post_tag_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('blog_post_tag', [
            'id' => $this->primaryKey(),
            'blog_post_id' => $this->integer()->notNull(),
            'blog_tag_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('blog_post_tag');
    }
}
