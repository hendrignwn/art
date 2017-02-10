<?php

use app\migrations\Migration;

class m170129_032638_add_new_progress_team_to_config_table extends Migration
{
    public function safeUp()
    {
        $this->insert('config', [
            'name' => 'progress_web_analyst',
            'value' => 85,
            'label' => 'Web Analyst',
        ]);
        $this->insert('config', [
            'name' => 'progress_web_development',
            'value' => 87,
            'label' => 'Web Development'
        ]);
        $this->insert('config', [
            'name' => 'progress_mobile_hybrid',
            'value' => 80,
            'label' => 'Mobile Hybrid System'
        ]);
        $this->insert('config', [
            'name' => 'progress_network_analyst',
            'value' => 88,
            'label' => 'Network Analyst'
        ]);
        $this->insert('config', [
            'name' => 'progress_network_development',
            'value' => 90,
            'label' => 'Network Development'
        ]);
    }

    public function safeDown()
    {
        $this->delete('config', 'name = "progress_web_analyst"');
        $this->delete('config', 'name = "progress_web_development"');
        $this->delete('config', 'name = "progress_mobile_hybrid"');
        $this->delete('config', 'name = "progress_network_development"');
    }
}
