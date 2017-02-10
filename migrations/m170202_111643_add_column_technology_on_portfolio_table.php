<?php

use app\migrations\Migration;

class m170202_111643_add_column_technology_on_portfolio_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('portfolio', 'technology', $this->string(100)->notNull()->after('completed_on'));
    }

    public function safeDown()
    {
        $this->dropColumn('portfolio', 'technology');
    }
}
