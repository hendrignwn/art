<?php

use app\migrations\Migration;

class m170131_153218_add_new_menu_testimonial_in_administrator_on_menu_table extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%menu}}',['id'=>'29', 'parent_id'=>'12','name'=>'Testimonial','url'=>'testimonial/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-users\'];','category'=>'10','status'=>'1','order'=>'14','created_at'=>'2017-01-23 15:30:51','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
    }

    public function safeDown()
    {
        $this->delete('{{%menu}}', 'id="29"');
    }
}
