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

<p>Consulting needs and problems that mass you to us and get a solution, planning and strategy suitable to your needs.</p>

<p>By planning and strategies appropriate expected to help you get the appropriate notwithstanding aspects of business process and to reduce financing.</p>
</div>

<div class="col-md-5"><img class="img-responsive" src="data/img/mac-spkr.png" /></div>
</div>
',
            'status' => Page::STATUS_ACTIVE,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->delete('page', 'slug = "our-services"');
    }
}
