<?php

use app\migrations\Migration;

class m170213_150949_add_new_scheduled_email_on_menu_table extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%menu}}',['id'=>'31', 'parent_id'=>'','name'=>'Scheduled Email','url'=>'scheduled-email/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-envelope-o\'];','category'=>'10','status'=>'1','order'=>'15','created_at'=>'2017-01-23 15:30:51','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
    }

    public function safeDown()
    {
        $this->delete('{{%menu}}', 'id="31"');
    }
}
