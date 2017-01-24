<?php

use yii\db\Migration;

class m170124_112244_add_new_seo_on_config_table extends Migration
{
    public function safeUp()
    {
        $this->insert("{{config}}", ['name'=>'app_metakey', 'value'=>'Art Techno Corporation ATC Global knowledge in your hand, web and network solusion', 'label'=>'Meta Keywords', 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_metadesc', 'value'=>'Art Techno Corporation is your web solusion, web maintenance, Network Development and network development. We also provide workshop center that is learn contains web, mobile and networking.', 'label'=>'Meta Description', 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_seo_image_url', 'value'=>'http://www.atc.co.id/data/images/atc.jpg', 'label'=>'Image Url for SEO', 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'app_seo_alt_image', 'value'=>'Logo design of the ATC (Art Techno Corporation)', 'label'=>'Alt Image for SEO', 'notes'=>null]);
    }

    public function safeDown()
    {
        $this->delete('{{config}}', 'name IN (\'app_metakey\', \'app_metadesc\', \'app_seo_image_url\', \'app_seo_alt_image\') ');
    }
}
