<?php

use yii\db\Migration;

class m170117_081345_create_new_data_to_table_config extends Migration
{
    public function safeUp()
    {
        $this->insert('config', [
            'name' => 'app_name',
            'value' => 'Art Techno Corporation',
            'label' => null,
        ]);
        
        $this->insert('config', [
            'name' => 'app_copyright',
            'value' => 'Art Techno Corporation',
            'label' => null,
        ]);
        
        $this->insert('config', [
            'name' => 'app_motto',
            'value' => 'Your web solusions',
            'label' => null,
        ]);
    }

    public function safeDown()
    {
        $this->delete('config', 'name = "app_name"');
        $this->delete('config', 'name = "app_copyright"');
        $this->delete('config', 'name = "app_motto"');
    }
}
