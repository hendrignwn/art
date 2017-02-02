<?php

use app\models\BlogPost;
use app\helpers\FormatConverter;
use yii\helpers\Html;

/* @var $blogPosts BlogPost */

?>

<section class="section-padding grid-news-hover grid-blog">
    <div class="container">

        <div class="row">
            <?php foreach($blogPosts as $post) : ?>
            
                <div class="col-md-4">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <?= Html::a(
                                    Html::img($post->getPhotoUrl(), [
                                        'alt' => $post->title,
                                        'class' => 'img-responsive',
                                    ]),
                                    $post->getDetailUrl(),
                                    []
                                ) ?>
                            <div class="post-date">
                                <?= FormatConverter::dateFormat($post->post_date, 'd') ?><span><?= FormatConverter::dateFormat($post->post_date, 'M') ?></span>
                            </div>
                        </div><!-- .post-thumb -->

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <?= Html::a($post->title, $post->getDetailUrl()) ?>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#"><?= $post->createdBy ? $post->createdBy->username : 'Anonymous' ?></a>
                                            </li>
                                            <li>
                                                In <?= Html::a($post->blogCategory->name, $post->blogCategory->getUrl()) ?>
                                            </li>
                                        </ul>
                                    </div><!-- .entry-meta -->
                                </div><!-- /.entry-header -->
                            </header><!-- /.entry-header-wrapper -->

                            <div class="entry-content">
                                <p><?= $post->lead_text ?></p>
                            </div><!-- .entry-content -->

                        </div><!-- /.blog-content -->

                    </article><!-- /.post-wrapper -->
                </div><!-- /.col-md-4 -->
                
            <?php endforeach; ?>
            
        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
<!-- Grid News End -->