<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* @var $model app\models\Portfolio */

?>
<!--<div class="item portfolio-item" data-groups='["<?//= $model->service ? $model->service->slug : 'all' ?>"]'>-->
    <div class="portfolio-wrapper">

        <div class="thumb">
            <div class="bg-overlay brand-overlay"></div>
            <?= $model->getIsGallery() ?
                    Html::img($model->getFirstGallery()->getPhotoUrl(), ['alt' => $model->getFirstGallery()->name]) :
                    Html::img(['data/img/portfolio-dummy-1.jpg'], [])
             ?>

            <div class="portfolio-intro">
                <div class="action-btn">
                    <a href="<?= Url::to(['data/img/portfolio-dummy-1.jpg']) ?>" class="tt-lightbox" title="<?= $model->getFirstGallery()->name ?>"> <i class="fa fa-search"></i></a>
                </div>
            </div>
        </div><!-- thumb -->

        <div class="portfolio-title">
            <h2><?= Html::a($model->name, $model->getDetailUrl()) ?></h2>
            <p><?= $model->service ? $model->service->name : 'All' ?></p>
        </div>

    </div><!-- /.portfolio-wrapper -->
<!--</div> /.portfolio-item -->
