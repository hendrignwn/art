<?php

use app\components\View;
use app\helpers\FormatConverter;
use app\models\BlogPost;
use app\widgets\BlogSidebarWidget;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this View */
/* @var $postDetail BlogPost */

$this->title = $postDetail->title;
$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' =>['/blog/index']];
$this->params['breadcrumbs'][] = 'Detail';
$this->params['breadcrumbs'][] = $this->title;

$description = $postDetail->metadesc;

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords($postDetail->metakey);
$this->registerMetaDescription($description);
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'noindex,nofollow',
]);
$socialMedia = [
    'title' => $postDetail->metakey .' - '. Yii::$app->name,
    'description' => $description,
    'image' => $postDetail->getPhotoUrl()
];
$this->registerMetaSocialMedia($socialMedia);

?>
<!-- blog section start -->
<section class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="posts-content single-post">

                    <article class="post-wrapper">

                        <header class="entry-header-wrapper clearfix">

                            <div class="author-thumb waves-effect waves-light">
                                <a href="#"><img src="<?= Url::to(['themes/v1/img/blog/author.jpg']) ?>" alt=""></a>                
                            </div>

                            <div class="entry-header">
                                <h2 class="entry-title"><?= $postDetail->title ?></h2>

                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li>
                                            <i class="fa fa-user"></i><?= $postDetail->createdBy ? $postDetail->createdBy->username : 'Admin' ?>
                                        </li>

                                        <li>
                                            <i class="fa fa-clock-o"></i><?= FormatConverter::dateFormat($postDetail->post_date, 'M d, Y') ?>
                                        </li>

                                        <li>
                                            <i class="fa fa-heart-o"></i><a href="#"><span>1</span></a>
                                        </li>

                                        <li>
                                            <i class="fa fa-comment-o"></i><a href="#">3</a>
                                        </li>
                                    </ul>
                                </div><!-- .entry-meta -->
                            </div>

                        </header><!-- /.entry-header-wrapper -->

                        <div class="thumb-wrapper">
                            <?= Html::img($postDetail->getPhotoUrl(), [
                                        'alt' => $postDetail->title,
                                        'class' => 'img-responsive',
                                    ]) ?>
                        </div><!-- .post-thumb -->


                        <div class="entry-content">
                            <?= $postDetail->content ?>
                        </div><!-- .entry-content -->


                        <footer class="entry-footer">
                            <div class="post-tags">
                                <span class="tags-links">
                                    <i class="fa fa-tags"></i>
                                    <?php 
                                    foreach ($postDetail->blogPostTags as $tag) {
                                        echo Html::a($tag->blogTag->name, $tag->blogTag->getUrl());
                                    }
                                    ?>
                                </span>
                            </div> <!-- .post-tags -->

                            <ul class="list-inline right share-post">
                                <li><a href="#"><i class="fa fa-facebook"></i> <span>Share</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i> <span>Tweet</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> <span>Plus</span></a>
                                </li>
                            </ul>
                        </footer>

                    </article><!-- /.post-wrapper -->

                    <nav class="single-post-navigation" role="navigation">
                        <div class="row">
                            <!-- Previous Post -->
                            <div class="col-xs-6">
                                <div class="previous-post-link">
                                    <a class="waves-effect waves-light" href="#"><i class="fa fa-long-arrow-left"></i>Read Previous Post</a>
                                </div>
                            </div>

                            <!-- Next Post -->
                            <div class="col-xs-6">
                                <div class="next-post-link">
                                    <a class="waves-effect waves-light" href="#">Read Next Post<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> <!-- .row -->
                    </nav>

                </div><!-- /.posts-content -->
            </div><!-- /.col-md-8 -->

            <div class="col-md-4">
                <?= BlogSidebarWidget::widget() ?>
            </div><!-- /.col-md-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- blog section end -->