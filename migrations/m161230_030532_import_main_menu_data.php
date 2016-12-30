<?php

use yii\db\Migration;

class m161230_030532_import_main_menu_data extends Migration
{
    public function safeUp()
    {
        $this->insert('{{main_menu}}', ['name'=>'Home','category'=>'landing','parent'=>null,'route'=>'#home','order'=>1,'data'=>null,'status'=>1]);
        $this->insert('{{main_menu}}', ['name'=>'About','category'=>'landing','parent'=>null,'route'=>'#about','order'=>5,'data'=>null,'status'=>1]);
        $this->insert('{{main_menu}}', ['name'=>'Projects','category'=>'landing','parent'=>null,'route'=>'#projects','order'=>10,'data'=>null,'status'=>1]);
        $this->insert('{{main_menu}}', ['name'=>'Services','category'=>'landing','parent'=>null,'route'=>'#service','order'=>15,'data'=>null,'status'=>1]);
        $this->insert('{{main_menu}}', ['name'=>'Blog','category'=>'landing','parent'=>null,'route'=>'#blog','order'=>20,'data'=>null,'status'=>1]);
        $this->insert('{{main_menu}}', ['name'=>'Contact','category'=>'landing','parent'=>null,'route'=>'#contact','order'=>25,'data'=>null,'status'=>1]);
    }

    public function safeDown()
    {
        $this->truncateTable('{{main_menu}}');
    }
}
