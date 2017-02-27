<?php

use app\migrations\Migration;

class m170216_045145_add_new_data_on_team_table extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%team}}',['id'=>'1','first_name'=>'Hendri','last_name'=>'Gunawan','professional'=>'Web Developer','photo'=>'hendri-efxrzursykyy6y6bnmcv.jpg','social_account'=>'{\"facebook\":\"https:\\/\\/www.facebook.com\\/hendrieg\",\"twitter\":\"\",\"linked_in\":\"https:\\/\\/www.linkedin.com\\/in\\/hendri-gunawan-9a5b1896\\/\",\"dribbble\":\"\",\"email\":\"hendri.gnw@gmail.com\"}','description'=>'<p>My name is Hendri Gunawan, commonly nicknamed the Hendri, I was born in Jakarta June 15, 1997, I was the eldest of two brothers. I just graduated from vocational school in 2015 with the Software Engineering program. I am very pleased with the IT world. therefore I scribbled a blog to write something related to the IT world. Ideals - ideals I of small to be a technical expert in the field, so from now on I focused in one field is the field of Web Developer and Mobile Programming.</p>','status'=>'1','created_at'=>'2017-02-16 11:34:47','updated_at'=>'2017-02-16 11:50:15','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%team}}',['id'=>'2','first_name'=>'Sandi','last_name'=>'Winata','professional'=>'Network Engineer','photo'=>'sandi-tveim6hjjd13td0kdo2.jpg','social_account'=>'{\"facebook\":\"https:\\/\\/www.facebook.com\\/shandhiesansan.difah\",\"twitter\":\"https:\\/\\/twitter.com\\/winatasandi05\",\"linked_in\":\"\",\"dribbble\":\"\",\"email\":\"\"}','description'=>'<p>My name is Sandi Winata, commonly nicknamed the sandi, I was born in Bogor, June 20, 1997, I was the eldest of two brothers. I just graduated from vocational school in 2015 with the Computer Network program. I am very pleased with the IT world. therefore I scribbled a blog to write something related to the IT world. Ideals - ideals I of small to be a technical expert in the field, so from now on I focused in one field is the field of IT Network Administrator and Network Engineer. Mikrotik Certified and CISCO Certified.</p>','status'=>'1','created_at'=>'2017-02-16 11:46:17','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
    }

    public function safeDown()
    {
        $this->truncateTable('{{%team}}');
    }
}