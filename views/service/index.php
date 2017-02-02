<?php

use app\models\Service;
use yii\helpers\Html;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* @var $services Service */

$this->title = 'Our Services';
$this->params['breadcrumbs'][] = $this->title;

$description = 'Quisque non erat mi. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.';

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords($this->title);
$this->registerMetaDescription($description);
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'noindex,nofollow',
]);
$socialMedia = [
    'title' => $this->title .' - '. Yii::$app->name,
    'description' => $description,
];
$this->registerMetaSocialMedia($socialMedia);

?>
<section class="padding-top-110">
    <div class="container">

        <div class="text-center mb-80">
            <h2 class="section-title text-uppercase">What We Do</h2>
            <p class="section-sub"><?= $description ?></p>
        </div>


        <div class="row no-gutter">
            
            <?php foreach($services as $id => $service) : ?>
                <div class="col-md-4 col-sm-6">
                    <div class="featured-item border-box hover brand-hover">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon"><?= $service->icon ?></i>
                        </div>
                        <div class="desc">
                            <h2><?= $service->name ?></h2>
                            <p><?= $service->description ?></p>
                        </div>
                    </div><!-- /.featured-item -->
                </div><!-- /.col-md-3 -->
            <?php endforeach; ?>

        </div><!-- /.row -->

        <div class="row padding-top-100">
            <div class="col-md-7">
                <h2 class="text-bold mb-30"><?= $this->title ?></h2>

                <p>Quickly procrastinate functionalized human capital with equity invested experiences. Rapidiously provide access to extensible solutions after pandemic supply chains. Credibly supply resource sucking channels before areas Dynamically harness cooperative partnerships rather than just in time total linkage. Dramatically syndicate plug and play <a href="#">professional with focused</a>. Credibly supply resource sucking channels before areas.</p>

                <p>Lorem ipsum dolor sit amet cr adipiscing elit. In maximus ligula semper <a href="#">metus pellentesque</a> mattis.</p>
            </div>

            <div class="col-md-5">
                <?= Html::img(['themes/v1/img/mockup/ipad-2.png'], ['class' => 'img-responsive']) ?>
            </div>
        </div>

    </div><!-- /.container -->

    <div class="mocup-wrapper text-center">
        <?= Html::img(['themes/v1/img/mockup/landscap-mockup.jpg'], []) ?>
    </div>
</section>