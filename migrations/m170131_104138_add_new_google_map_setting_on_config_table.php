<?php

use yii\db\Migration;

class m170131_104138_add_new_google_map_setting_on_config_table extends Migration
{
    public function safeUp()
    {
        $this->insert("{{config}}", ['name'=>'credential_googlemap_api', 'value'=>'AIzaSyAKeC-2a0_v6Ner-MBhpPSLrAIvBDXToq8', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'map_location_latitude', 'value'=>'-6.5430316', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'map_location_longitude', 'value'=>'106.6887187', 'label'=>null, 'notes'=>null]);
        $this->insert("{{config}}", ['name'=>'map_marker_description', 'value'=>'Art Techno Corporation, Jl. Purnawarman No.11, Ciampea, Bogor, Jawa Barat 16620', 'label'=>null, 'notes'=>null]);
    }

    public function safeDown()
    {
        $this->delete('{{config}}', 'name="credential_googlemap_api"');
        $this->delete('{{config}}', 'name="map_location_latitude"');
        $this->delete('{{config}}', 'name="map_location_longitude"');
        $this->delete('{{config}}', 'name="map_marker_description"');
    }
}
