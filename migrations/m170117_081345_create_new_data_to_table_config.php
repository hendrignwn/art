<?php

use yii\db\Migration;

class m170117_081345_create_new_data_to_table_config extends Migration
{
    public function safeUp()
    {
        $this->insert("{{config}}", ['name'=>'app_name', 'value'=>'Art Techno Corporation', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_motto', 'value'=>'Global knowledge in your hand', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_copyright', 'value'=>'ATC', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_contact_address', 'value'=>'Jl Kebon Kopi Raya, Ciampea Bogor 16620', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_contact_phone', 'value'=>'(021) 0099 029', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_account_facebook', 'value'=>'https://www.facebook.com/', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_account_twitter', 'value'=>'https://www.twitter.com', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_account_googleplus', 'value'=>'https://plus.google.com', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_contact_email', 'value'=>'hello@art.co.id', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'email_subject', 'value'=>'ATC', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'email_admin', 'value'=>'hendrigunawan195@gmail.com', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'email_developers', 'value'=>'hendrigunawan195@gmail.com,winatasandi05@gmail.com', 'label'=>null, 'notes'=>'Pakai comma (,) sebagai pemisah email dan jangan pakai spasi']);
        $this->insert("{{config}}", ['name'=>'email_noreply', 'value'=>'no-reply@atc.co.id', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'email_web_support', 'value'=>'hendrigunawan195@gmail.com', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'counter_year_of_experience', 'value'=>2, 'label'=>'Year Of Experience', 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'counter_project_completed', 'value'=>2, 'label'=>'Project Completed', 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'counter_happy_customers', 'value'=>5, 'label'=>'Happy Customers', 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'counter_our_employees', 'value'=>2, 'label'=>'Our Employees', 'notes'=>null]);
        
        $titles = json_encode(['Mr','Mrs','Ms']);
        $this->insert("{{config}}", ['name'=>'titles', 'value'=>$titles, 'label'=>null, 'notes'=>null]);
        $registrationTypes = json_encode(['training'=>'Training','workshop'=>'Workshop']);
        $this->insert("{{config}}", ['name'=>'registration_types', 'value'=>$registrationTypes, 'label'=>null, 'notes'=>null]);
    }

    public function safeDown()
    {
        $this->truncateTable('config');
    }
}
