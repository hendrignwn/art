<?php

use app\migrations\Migration;

class m170131_070508_add_new_about_on_page_table extends Migration
{
    public function safeUp()
    {
        $this->insert('page', [
            'id' => app\models\Page::PAGE_ABOUT,
            'name' => 'About Us',
            'slug' => 'about-us',
            'category' => app\models\Page::CATEGORY_FULL,
            'description' => '<section class="section-padding">
<div class="container">
<div class="text-center mb-80">
<h2 class="section-title text-uppercase">About Us</h2>

<p class="section-sub">We are focused on Consultants IT and IT Trainings. With the advent of faster technology and related with line of businesses so we come to provide solutions, planning and strategy is integrated as maximum added value for the needs and any problems in information technology.</p>
</div>

<div class="row">
<div class="col-md-4 mb-sm-50">
<div class="featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline">
<div class="icon"><i class="material-icons colored brand-icon">verified_user</i></div>

<div class="desc">
<h2>We&#39;r Innovative</h2>

<p>Menjadi Perusahaan IT Profesional dengan solusi dan layanan yang optimal serta memiliki daya saing.</p>
</div>
</div>
<!-- /.featured-item --></div>
<!-- /.col-md-4 -->

<div class="col-md-4 mb-sm-50">
<div class="featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline">
<div class="icon"><i class="material-icons colored brand-icon">thumb_up</i></div>

<div class="desc">
<h2>We&#39;r Creative</h2>

<p>Memberikan Layanan dan Solusi yang terintegerasi dan mengikuti perkembangan dunia Teknologi Informasi.</p>
</div>
</div>
<!-- /.featured-item --></div>
<!-- /.col-md-4 -->

<div class="col-md-4">
<div class="featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline">
<div class="icon"><i class="material-icons colored brand-icon">visibility</i></div>

<div class="desc">
<h2>We&#39;r Productive</h2>

<p>Memberikan produk dan layanan yang berkualitas dengan layanan purna jual yang maksimal kepada setiap pelangan kami.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
</div>
</div>
<!-- /.featured-item --></div>
<!-- /.col-md-4 --></div>

<div class="row">
<div class="col-xs-12 col-md-12">
<p>ATC is Art Techno Corporation Indonesia. We are focused on Consultants IT and IT Trainings. With the advent of faster technology and related with line of businesses so we come to provide solutions, planning and strategy is integrated as maximum added value for the needs and any problems in information technology.</p>

<p>With supported of the professional person who works with skills, we will continue to try to meet all information technology needs required by customers. Our company holding permission in software sales, hardware sales, communication tools and electronic sales, computer services, multimedia and advertising and knowledge of the information engineering for the future.</p>

<div class="row">
<div class="col-xs-12 col-md-4">
<h3>Visi:</h3>

<ul class="check-circle-list">
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Menjadi Perusahaan IT Profesional dengan solusi dan layanan yang optimal serta memiliki daya saing.</li>
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Memberikan Layanan dan Solusi yang terintegerasi dan mengikuti perkembangan dunia Teknologi Informasi.</li>
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Menjadi Perusahaan Multinasional bertaraf Internasional.</li>
</ul>
</div>

<div class="col-xs-12 col-md-4">
<h3>Misi:</h3>

<ul class="check-circle-list">
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Tidak hanya memberi solusi, kami memberikan layanan yang terpadu dalam setiap layanan Teknologi Informasi yang kami berikan.</li>
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Memberikan produk dan layanan yang berkualitas dengan layanan purna jual yang maksimal kepada setiap pelangan kami.</li>
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Memberikan pelayanan yang baik dan jaminan kepuasan kepada client.</li>
</ul>
</div>

<div class="col-xs-12 col-md-4">
<h3>Keunggulan Kami :</h3>

<ul class="check-circle-list">
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Didukung tenaga profesional yang berpengalaman dibidangnya masing-masing</li>
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Bebas biaya konsultasi</li>
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Dukungan 24 Jam untuk melayani keluhan dan kebutuhan pelanggan kami</li>
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Full Customize sehingga sistem yang kami buat akan mengikuti kebutuhan (Business Process) pelanggan kami dan bukan sebaliknya</li>
	<li><i class="fa fa-check-circle mr-10">&nbsp;</i>Setiap layanan jasa dan produk kami disertai garansi dan layanan purna jual</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- /.container --></section>
',
            'metakey' => 'About Us Art Techno Corporation',
            'metadesc' => 'We are innovative, we are creative, we provides web development and colsultant, web maintenance. We also provides about network development, problem solving and maintenance. We have training center to will somebody learn about web or network',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ]);
    }

    public function safeDown()
    {
        $this->delete('page', 'id="'.app\models\Page::PAGE_ABOUT.'"');
    }
}
