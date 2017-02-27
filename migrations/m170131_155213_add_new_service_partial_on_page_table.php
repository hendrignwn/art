<?php

use app\migrations\Migration;

class m170131_155213_add_new_service_partial_on_page_table extends Migration
{
    public function safeUp()
    {
        $this->insert('page', [
            'id' => app\models\Page::PAGE_SERVICE_PARTIAL,
            'name' => 'Short Service',
            'slug' => 'short-service',
            'category' => app\models\Page::CATEGORY_PARTIAL,
            'description' => '<section class="section-padding">
<div class="container">
<div class="text-center mb-80">
<h2 class="section-title text-uppercase">What we do</h2>

<p class="section-sub">Consulting needs and problems that mass you to us and get a solution, planning and strategy suitable to your needs. By planning and strategies appropriate expected to help you get the appropriate notwithstanding aspects of business process and to reduce financing.</p>
</div>

<div class="row equal-height-row">
<div class="col-md-4 mb-30">
<div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
<div class="icon"><i class="material-icons colored brand-icon">web</i></div>

<div class="desc">
<h2>Web Design</h2>

<p>Wake up business and your business identity on the Internet through the Website.</p>
</div>
</div>
<!-- /.featured-item --></div>
<!-- /.col-md-4 -->

<div class="col-md-4 mb-30">
<div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
<div class="icon"><i class="material-icons colored brand-icon">wifi</i></div>

<div class="desc">
<h2>Hardware and Networking</h2>

<p>Hardware and Network Infrastructure that will either provide comfort in work.</p>
</div>
</div>
<!-- /.featured-item --></div>
<!-- /.col-md-4 -->

<div class="col-md-4 mb-30">
<div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
<div class="icon"><i class="material-icons colored brand-icon">star</i></div>

<div class="desc">
<h2>Training</h2>

<p>Knowledge in your hand, Future Technolgy and Expert experience.</p>
</div>
</div>
<!-- /.featured-item --></div>
<!-- /.col-md-4 --><!-- /.row --></div>
<!-- /.container --></div>
</section>
',
            'metakey' => 'Services of Art Techno Corporation',
            'metadesc' => 'We are innovative, we are creative, we provides web development and colsultant, web maintenance. We also provides about network development, problem solving and maintenance. We have training center to will somebody learn about web or network',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ]);
    }

    public function safeDown()
    {
        $this->delete('page', 'id="'.app\models\Page::PAGE_SERVICE_PARTIAL.'"');
    }
}
