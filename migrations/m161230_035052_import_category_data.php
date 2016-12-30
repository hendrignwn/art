<?php

use yii\db\Migration;

class m161230_035052_import_category_data extends Migration
{
    public function safeUp()
    {
        $this->insert('{{category}}', ['name'=>'Web Development', 'slug'=>'web-development']);
        $this->insert('{{category}}', ['name'=>'Network Development', 'slug'=>'network-development']);
        $this->insert('{{category}}', ['name'=>'Open Training', 'slug'=>'open-training']);
        $this->insert('{{category}}', ['name'=>'Open Workshop', 'slug'=>'open-workshop']);
    }

    public function safeDown()
    {
        $this->truncateTable('{{category}}');
    }
}
