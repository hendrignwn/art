<?php

use yii\db\Migration;

class m170123_074959_add_index_in_blog_post_tag_table extends Migration
{
    public function safeUp()
    {
        $this->createIndex('blog_post_tag_index', 'blog_post_tag', ['blog_post_id', 'blog_tag_id']);
        $this->addForeignKey('fk_blog_post_8139_00','{{%blog_post_tag}}', 'blog_post_id', '{{%blog_post}}', 'id', 'CASCADE', 'CASCADE' );
        $this->addForeignKey('fk_blog_tag_8139_01','{{%blog_post_tag}}', 'blog_tag_id', '{{%blog_tag}}', 'id', 'CASCADE', 'CASCADE' );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_blog_post_8139_00', 'blog_post_tag');
        $this->dropForeignKey('fk_blog_tag_8139_01', 'blog_post_tag');
    }
}
