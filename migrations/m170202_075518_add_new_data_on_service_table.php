<?php

use yii\db\Migration;

class m170202_075518_add_new_data_on_service_table extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%service}}',['id'=>'1','name'=>'Web Design','icon'=>'web','slug'=>'web-design','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metakey'=>'We provides make the Web Design','metadesc'=>'We provides make the Web Design','status'=>'1','created_at'=>'2017-02-02 14:35:12','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%service}}',['id'=>'2','name'=>'Custom Web','icon'=>'web','slug'=>'custom-web','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metakey'=>'We provides make the Custom Web','metadesc'=>'We provides make the Custom Web to be amazing web designer','status'=>'1','created_at'=>'2017-02-02 14:37:51','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%service}}',['id'=>'3','name'=>'CMS','icon'=>'web_asset','slug'=>'cms','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metakey'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metadesc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','status'=>'1','created_at'=>'2017-02-02 14:38:32','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%service}}',['id'=>'4','name'=>'Maintenance and Renovation','icon'=>'web_asset','slug'=>'maintenance-and-renovation','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metakey'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metadesc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','status'=>'1','created_at'=>'2017-02-02 14:39:05','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%service}}',['id'=>'5','name'=>'Network Development','icon'=>'network_wifi','slug'=>'network-development','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metakey'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metadesc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','status'=>'1','created_at'=>'2017-02-02 14:39:39','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%service}}',['id'=>'6','name'=>'Training','icon'=>'grade','slug'=>'training','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metakey'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','metadesc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.','status'=>'1','created_at'=>'2017-02-02 14:40:03','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
    }

    public function safeDown()
    {
        $this->truncateTable('{{%service}}');
    }
}
