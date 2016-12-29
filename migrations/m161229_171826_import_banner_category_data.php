<?php

use yii\db\Migration;

class m161229_171826_import_banner_category_data extends Migration
{
    public function safeUp()
    {
        $this->insert('{{banner_category}}', ['name'=>'Carousel','status'=>1,'created_at'=>'2016-12-30 00:10:00']);
    }

    public function safeDown()
    {
        $this->truncateTable('{{banner_category}}');
    }
}
