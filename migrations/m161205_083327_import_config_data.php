<?php

use yii\db\Migration;

class m161205_083327_import_config_data extends Migration
{
    public function safeUp()
    {
        $this->insert("{{config}}", ['name'=>'app_name', 'value'=>'Artechno Corporation', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_motto', 'value'=>'Global knowledge in your hand', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_copyright', 'value'=>'Artechno Corporation', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_contact_address', 'value'=>'Jl Kebon Kopi Raya, Ciampea Bogor 16620', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_contact_phone', 'value'=>'(021) 0099 029', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_account_facebook', 'value'=>'https://www.facebook.com/', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_account_twitter', 'value'=>'https://www.twitter.com', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_account_googleplus', 'value'=>'https://plus.google.com', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_contact_email', 'value'=>'contact@art.co.id', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'email_admin', 'value'=>'hendrigunawan195@gmail.com', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'email_developer', 'value'=>'hendrigunawan195@gmail.com,winatasandi05@gmail.com', 'label'=>null, 'notes'=>'Pakai comma (,) sebagai pemisah email dan jangan pakai spasi']);
        $this->insert("{{config}}", ['name'=>'email_noreply', 'value'=>'no-reply@atc.co.id', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'email_admin_support', 'value'=>'hendrigunawan195@gmail.com', 'label'=>null, 'notes'=>null]);
    }

    public function safeDown()
    {
        $this->truncateTable("{{config}}");
    }
}
