<?php

use app\models\BlogPost;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

/* @var $latestBlogs BlogPost */

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="tt-sidebar-wrapper" role="complementary">
    <div class="widget widget_search">
        <form role="search" method="get" class="search-form" >
            <input type="text" class="form-control" value="" name="s" id="s" placeholder="Write any keywords">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.widget_search -->


    <div class="widget widget_tt_author_widget">

        <div class="author-info-wrapper">

            <div class="author-cover">
                <img src="<?= Url::to(['themes/v1/img/blog/author-large-thumb.jpg']) ?>" alt="">
            </div>

            <div class="author-avatar">
                <img src="<?= Url::to(['themes/v1/img/blog/author-2.jpg']) ?>" alt="">

                <h2>John Doe</h2>
                <span>User Interface Designer</span>
            </div>

            <p>All these men were men of conviction. They deeply believed in what they were doing and put their reputations.</p>

            <div class="author-social-links">
                <ul class="list-inline">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>            
                </ul>
            </div>
        </div> <!-- /author-info-wrapper -->
    </div><!-- /.widget_tt_author_widget -->


    <div  class="widget widget_tt_popular_post">
        <div class="tt-popular-post border-bottom-tab">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tt-popular-post-tab1" data-toggle="tab" aria-expanded="true">Latest</a>
                </li>
                <li class="">
                    <a href="#tt-popular-post-tab2" data-toggle="tab" aria-expanded="false">Popular</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- latest post tab -->
                <div id="tt-popular-post-tab1" class="tab-pane fade active in">
                    
                    <?php foreach ($latestBlogs as $blog) : ?>
                        <div class="media">
                            <?= Html::a(
                                Html::img($blog->getPhotoUrl(), ['alt' => $blog->title]),
                                $blog->getDetailUrl(),
                                [
                                    'class' => 'media-left'
                                ]
                            ) ?>
                            <div class="media-body">
                                <h4><a href="#"><?= $blog->title ?></a></h4>
                            </div> <!-- /.media-body -->
                        </div> <!-- /.media -->
                    <?php endforeach; ?>

                </div>

                <!-- popular post tab-->
                <div id="tt-popular-post-tab2" class="tab-pane fade">

                    <?php foreach ($latestBlogs as $blog) : ?>
                        <div class="media">
                            <?= Html::a(
                                Html::img($blog->getPhotoUrl(), ['alt' => $blog->title]),
                                $blog->getDetailUrl(),
                                [
                                    'class' => 'media-left'
                                ]
                            ) ?>
                            <div class="media-body">
                                <h4><a href="#"><?= $blog->title ?></a></h4>
                            </div> <!-- /.media-body -->
                        </div> <!-- /.media -->
                    <?php endforeach; ?>

                </div>
            </div><!-- /.tab-content -->
        </div><!-- /.tt-popular-post -->
    </div><!-- /.widget_tt_popular_post -->


    <div class="widget widget_categories">
        <h3 class="widget-title">Categories</h3>
        <?= Menu::widget([
            'items' => $blogCategories,
        ]) ?>
    </div><!-- /.widget_categories -->


    <div class="widget widget_tt_twitter">
        <i class="fa fa-twitter"></i>
        <div id="twitter-gallery-feed">
            <div class="twitter-widget"></div> <!-- this div is required for carousel injected by javascript -->
            <!-- html code injected via javascript -->
        </div>

    </div><!-- /.widget_tt_twitter -->


    <div class="widget widget_tt_instafeed">
        <i class="fa fa-instagram"></i>
        <h3 class="widget-title">Instagram Photos</h3>

        <div id="myinstafeed">
            <!-- html code injected via javascript -->
        </div> 

    </div><!-- /.widget_tt_instafeed -->

</div><!-- /.tt-sidebar-wrapper -->