<?php

use yii\db\Migration;

class m170202_081549_add_new_faq_in_footer_on_menu_table extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%menu}}',['id'=>'30', 'parent_id'=>'','name'=>'FAQ','url'=>'page/faq','is_absolute_url'=>'0','option'=>'','category'=>'2','status'=>'1','order'=>'15','created_at'=>'2017-01-23 15:30:51','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
    }

    public function safeDown()
    {
        $this->delete('{{%menu}}', 'id="30"');
    }
}
