<?php

use app\migrations\Migration;

class m170208_131429_add_new_data_on_blog_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%blog_category}}',['id'=>'1','name'=>'Technology','slug'=>'technology','metakey'=>'Blog Technology of ATC','metadesc'=>'This is about Technology of ATC','status'=>'1','created_at'=>'2017-02-08 14:11:34','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_category}}',['id'=>'2','name'=>'Network','slug'=>'network','metakey'=>'Blog Network of ATC','metadesc'=>'This is Blog category network of the ATC','status'=>'1','created_at'=>'2017-02-08 14:12:08','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_category}}',['id'=>'3','name'=>'Training','slug'=>'training','metakey'=>'Training, Sylabus, ATC','metadesc'=>'This is training information of ATC','status'=>'1','created_at'=>'2017-02-08 14:13:50','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->execute('SET foreign_key_checks = 1;');
    }
    
    /**
     * @inheritdoc
     */
    public function safeDown() 
    {
        $this->truncateTable('{{%blog_category}}');
    }
}
