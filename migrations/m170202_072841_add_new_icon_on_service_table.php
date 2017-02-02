<?php

use yii\db\Migration;

class m170202_072841_add_new_icon_on_service_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('service', 'icon', $this->string(20)->notNull()->after('name'));
    }

    public function safeDown()
    {
        $this->dropColumn('service', 'icon');
    }
}
