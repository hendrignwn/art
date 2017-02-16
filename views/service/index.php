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

$description = 'Consulting needs and problems that mass you to us and get a solution, planning and strategy suitable to your needs. By planning and strategies appropriate expected to help you get the appropriate notwithstanding aspects of business process and to reduce financing.';

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
            <h2 class="section-title text-uppercase">Our Services</h2>
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

        <?= $pageService->description ?>

    </div><!-- /.container -->

    <div class="mocup-wrapper text-center">
        <?= Html::img(['data/img/landscap-mockup.jpg'], []) ?>
    </div>
</section>