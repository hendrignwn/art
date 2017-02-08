<?php

use yii\db\Migration;

class m170208_131420_add_new_data_on_blog_tag_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%blog_tag}}',['id'=>'1','name'=>'Yii2','slug'=>'yii2','created_at'=>'2017-02-08 14:12:19','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_tag}}',['id'=>'2','name'=>'Yii','slug'=>'yii','created_at'=>'2017-02-08 14:12:23','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_tag}}',['id'=>'3','name'=>'Javascript','slug'=>'javascript','created_at'=>'2017-02-08 14:12:28','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_tag}}',['id'=>'4','name'=>'PHP','slug'=>'php','created_at'=>'2017-02-08 14:12:32','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_tag}}',['id'=>'5','name'=>'MySQL','slug'=>'mysql','created_at'=>'2017-02-08 14:12:38','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_tag}}',['id'=>'6','name'=>'Cisco','slug'=>'cisco','created_at'=>'2017-02-08 14:12:44','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_tag}}',['id'=>'7','name'=>'Linux','slug'=>'linux','created_at'=>'2017-02-08 14:12:51','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_tag}}',['id'=>'8','name'=>'Mikrotik','slug'=>'mikrotik','created_at'=>'2017-02-08 14:13:00','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_tag}}',['id'=>'9','name'=>'OS','slug'=>'os','created_at'=>'2017-02-08 14:13:08','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%blog_tag}}',['id'=>'10','name'=>'Training','slug'=>'training','created_at'=>'2017-02-08 14:13:14','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->execute('SET foreign_key_checks = 1;');
    }
    
    /**
     * @inheritdoc
     */
    public function safeDown() 
    {
        $this->truncateTable('{{%blog_tag}}');
    }
}
