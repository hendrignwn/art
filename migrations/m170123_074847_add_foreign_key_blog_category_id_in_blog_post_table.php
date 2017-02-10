<?php

use app\migrations\Migration;

class m170123_074847_add_foreign_key_blog_category_id_in_blog_post_table extends Migration
{
    public function safeUp()
    {
        $this->addForeignKey('fk_blog_post_category', 'blog_post', 'blog_category_id', 'blog_category', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_blog_post_category', 'blog_post');
    }
}
