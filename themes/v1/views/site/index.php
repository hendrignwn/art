<?php

use app\models\Config;
use app\widgets\BannerWidget;
use app\widgets\BlogSectionWidget;
use app\widgets\ContactUsWidget;
use app\widgets\GoogleMapWidget;
use app\widgets\PortfolioWidget;
use app\widgets\SubscribeFormWidget;
use app\widgets\TestimonialWidget;


$this->title = Config::getAppMotto();

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords(Config::getAppMetaKey());
$this->registerMetaDescription(Config::getAppMetaDescription());
$this->registerMetaTag(['name' => 'robots',  'content' => 'index,follow']);
$this->registerMetaTag(['name' => 'googlebot',  'content' => 'index,follow']);
$socialMedia = [
    'title' => Config::getAppMetaKey(),
    'description' => Config::getAppMetaDescription(),
];
$this->registerMetaSocialMedia($socialMedia);

?>
        <?= BannerWidget::widget() ?>

        <?= $shortService ? $shortService->description : '' ?>

         <section class="counter-section facts-two banner-10 parallax-bg bg-fixed overlay light-9" data-stellar-background-ratio="0.5">
              <div class="container">

                  <div class="row text-center">
                      <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE87E;</i>
                        <?php $happyCustomer = Config::getCounterHappyCustomer(); ?>
                        <span class="timer"><?= $happyCustomer->value ?></span>
                        <span class="count-description"><?= $happyCustomer->label ?></span>
                      </div> <!-- /.col-sm-3 -->

                      <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE863;</i>
                        <?php $ourEmployee = Config::getCounterOurEmployee(); ?>
                        <span class="timer"><?= $ourEmployee->value ?></span>
                        <span class="count-description"><?= $ourEmployee->label ?></span>
                      </div><!-- /.col-sm-3 -->

                      <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE8F8;</i>
                        <?php $projectCompleted = Config::getCounterProjectCompleted(); ?>
                        <span class="timer"><?= $projectCompleted->value ?></span>
                        <span class="count-description"><?= $projectCompleted->label ?></span>
                      </div><!-- /.col-sm-3 -->

                      <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE90F;</i>
                        <?php $yearOfExperience = Config::getCounterProjectCompleted(); ?>
                        <span class="timer"><?= $yearOfExperience->value ?></span>
                        <span class="count-description"><?= $yearOfExperience->label ?></span>
                      </div><!-- /.col-sm-3 -->
                  </div>
              </div><!-- /.container -->
        </section>

        <?= PortfolioWidget::widget(['portfolios' => $portfolioProvider]) ?>

        <?= TestimonialWidget::widget() ?>

        <?= BlogSectionWidget::widget() ?>

        <?= SubscribeFormWidget::widget(['model' => $subscribeForm]) ?>

        <?= ContactUsWidget::widget(['model' => $contactModel]) ?>
        
        <?= GoogleMapWidget::widget() ?>
