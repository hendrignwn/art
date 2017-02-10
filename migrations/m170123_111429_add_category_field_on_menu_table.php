<?php

use app\migrations\Migration;

class m170123_111429_add_category_field_on_menu_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('menu', 'category', $this->smallInteger()->notNull()->defaultValue('1')->after('option'));
    }

    public function safeDown()
    {
        $this->dropColumn('menu', 'category');
    }
}
