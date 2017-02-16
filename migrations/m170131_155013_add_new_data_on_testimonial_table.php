<?php

use app\migrations\Migration;

class m170131_155013_add_new_data_on_testimonial_table extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%testimonial}}',['id'=>'1','name'=>'Hendri Gunawan','description'=>'Art is really good peoples. The owner still young entrepreneur. ','professional'=>'Project Manager of the Migatek Indonesia, Inc','status'=>'1','created_at'=>'2017-01-31 16:42:50','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%testimonial}}',['id'=>'2','name'=>'Sandi Winata','description'=>'They are is really professional, very quick on the problem solving. Really good.','professional'=>'CEO of the Mart Global Solutions, Inc','status'=>'1','created_at'=>'2017-01-31 16:44:51','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
    }

    public function safeDown()
    {
        $this->truncateTable('{{%testimonial}}');
    }
}
