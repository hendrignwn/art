<?php

use app\models\Page;
use app\migrations\Migration;
use yii\helpers\Html;

class m170205_064456_add_new_partial_service_on_page_table extends Migration
{
    public function safeUp()
    {
        $this->insert('page', [
            'name' => 'Our Services',
            'slug' => 'our-services',
            'category' => Page::CATEGORY_PARTIAL,
            'description' => '<div class="row padding-top-100">
            <div class="col-md-7">
                <h2 class="text-bold mb-30">Our Services</h2>

                <p>Quickly procrastinate functionalized human capital with equity invested experiences. Rapidiously provide access to extensible solutions after pandemic supply chains. Credibly supply resource sucking channels before areas Dynamically harness cooperative partnerships rather than just in time total linkage. Dramatically syndicate plug and play <a href="#">professional with focused</a>. Credibly supply resource sucking channels before areas.</p>

                <p>Lorem ipsum dolor sit amet cr adipiscing elit. In maximus ligula semper <a href="#">metus pellentesque</a> mattis.</p>
            </div>

            <div class="col-md-5">
                <img src="data/img/mac-spkr.png" class="img-responsive" />
            </div>
        </div>',
            'status' => Page::STATUS_ACTIVE,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->delete('page', 'slug = "our-services"');
    }
}
