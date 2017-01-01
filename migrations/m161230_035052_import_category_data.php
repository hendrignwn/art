<?php

use yii\db\Migration;

class m161230_035052_import_category_data extends Migration
{
    public function safeUp()
    {
        $this->insert('{{category}}', ['id'=>1, 'name'=>'Web Development', 'slug'=>'web-development']);
        $this->insert('{{category}}', ['id'=>2, 'name'=>'Network Development', 'slug'=>'network-development']);
        $this->insert('{{category}}', ['id'=>3, 'name'=>'Open Training', 'slug'=>'open-training']);
        $this->insert('{{category}}', ['id'=>4, 'name'=>'Open Workshop', 'slug'=>'open-workshop']);
    }

    public function safeDown()
    {
        $this->truncateTable('{{category}}');
    }
}
