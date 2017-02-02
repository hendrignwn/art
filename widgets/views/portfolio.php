<?php

use app\models\Portfolio;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $portfolios Portfolio */

?>

<section class="section-padding">
    <div class="container">

        <div class="text-center mb-50">
            <h2 class="section-title text-uppercase">Works</h2>
            <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
        </div>

        <div class="portfolio-container text-center">
            <ul class="portfolio-filter brand-filter">
                <li class="active waves-effect waves-light" data-group="all">All</li>
                <?php foreach($services as $service) : ?>
                    <li class="waves-effect waves-light" data-group="<?= $service->slug ?>"><?= $service->name ?></li>
                <?php endforeach; ?>
            </ul>

            <div class="portfolio portfolio-with-title col-3 gutter mt-50">
                
                <?php foreach($portfolios as $portfolio) : ?>
                    <div class="portfolio-item" data-groups='["<?= $portfolio->service ? $portfolio->service->slug : 'all' ?>"]'>
                        <div class="portfolio-wrapper">

                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <?= $portfolio->getIsGallery() ?
                                        Html::img($portfolio->getFirstGallery()->getPhotoUrl(), ['alt' => $portfolio->getFirstGallery()->name]) :
                                        Html::img(['themes/v1/img/portfolio/portfolio-1.jpg'], [])
                                 ?>

                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="<?= Url::to(['themes/v1/img/portfolio/portfolio-1.jpg']) ?>" class="tt-lightbox" title="iOS Game Design"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div><!-- thumb -->

                            <div class="portfolio-title">
                                <h2><?= Html::a($portfolio->name, $portfolio->getDetailUrl()) ?></h2>
                                <p><?= $portfolio->service ? $portfolio->service->name : 'All' ?></p>
                            </div>

                        </div><!-- /.portfolio-wrapper -->
                    </div><!-- /.portfolio-item -->
                <?php endforeach; ?>

            </div><!-- /.portfolio -->

            <div class="load-more-button text-center">
                <a class="waves-effect waves-light btn mt-30"> <i class="fa fa-spinner left"></i> View All</a>
            </div>

        </div><!-- portfolio-container -->

    </div><!-- /.container -->
</section>