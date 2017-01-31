<?php

use yii\db\Migration;

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
                    <h2 class="section-title text-uppercase">Who We are</h2>
                    <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-sm-50">
                        <div class="featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline">
                            <div class="icon">
                                <i class="material-icons colored brand-icon">&#xE323;</i>
                            </div>
                            <div class="desc">
                                <h2>We\'r Innovative</h2>
                                <p>Porttitor communicate pandemic data rather than enabled niche markets neque pulvinar vitae.</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div><!-- /.col-md-4 -->
                  
                    <div class="col-md-4 mb-sm-50">
                        <div class="featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline">
                            <div class="icon">
                                <i class="material-icons colored brand-icon">&#xE412;</i>
                            </div>
                            <div class="desc">
                                <h2>We\'r Creative</h2>
                                <p>Porttitor communicate pandemic data rather than enabled niche markets neque pulvinar vitae.</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div><!-- /.col-md-4 -->
                  
                    <div class="col-md-4">
                        <div class="featured-item feature-icon icon-hover icon-hover-brand icon-circle icon-outline">
                            <div class="icon">
                                <i class="material-icons colored brand-icon">&#xE02C;</i>
                            </div>
                            <div class="desc">
                                <h2>We\'r Productive</h2>
                                <p>Porttitor communicate pandemic data rather than enabled niche markets neque pulvinar vitae.</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div><!-- /.col-md-4 -->
                </div>

            </div><!-- /.container -->
        </section>',
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
