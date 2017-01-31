<?php

use app\components\View;
use yii\widgets\LinkPager;

/* @var $this View */

$this->title = 'Blog Posts';
$this->params['breadcrumbs'][] = $this->title;

$description = 'This is a list Blog Posts, you will be know about us in here';

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
<section class="section-padding grid-news-hover grid-blog">
    <div class="container">

        <div class="row">
            <div id="blogGrid">
                
                <?php foreach ($blogPosts as $post) : ?>
                <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="#"><img src="assets/img/blog/blog-8.jpg" class="img-responsive" alt="" ></a>
                            <div class="post-date">
                                25<span>Jun</span>
                            </div>
                        </div><!-- .post-thumb -->

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">Ideas That Moved Us in 2015</a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                In <a href="#">Technology</a>
                                            </li>
                                        </ul>
                                    </div><!-- .entry-meta -->
                                </div><!-- /.entry-header -->
                            </header><!-- /.entry-header-wrapper -->

                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
                            </div><!-- .entry-content -->

                        </div><!-- /.blog-content -->

                    </article><!-- /.post-wrapper -->
                </div><!-- /.col-md-4 -->
                <?php endforeach; ?>

<!--                <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="#"><img src="assets/img/blog/blog-1.jpg" class="img-responsive" alt="" ></a>
                            <div class="post-date">
                                25<span>Jun</span>
                            </div>
                        </div> .post-thumb 

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">Ideas That Moved Us in 2015</a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                In <a href="#">Technology</a>
                                            </li>
                                        </ul>
                                    </div> .entry-meta 
                                </div> /.entry-header 
                            </header> /.entry-header-wrapper 

                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
                            </div> .entry-content 

                        </div> /.blog-content 

                    </article> /.post-wrapper 
                </div> /.col-md-4 

                <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="#"><img src="assets/img/blog/blog-5.jpg" class="img-responsive" alt="" ></a>
                            <div class="post-date">
                                25<span>Jun</span>
                            </div>
                        </div> .post-thumb 

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">Ideas That Moved Us in 2015</a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                In <a href="#">Technology</a>
                                            </li>
                                        </ul>
                                    </div> .entry-meta 
                                </div> /.entry-header 
                            </header> /.entry-header-wrapper 

                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
                            </div> .entry-content 

                        </div> /.blog-content 

                    </article> /.post-wrapper 
                </div> /.col-md-4 

                <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="#"><img src="assets/img/blog/blog-4.jpg" class="img-responsive" alt="" ></a>
                            <div class="post-date">
                                25<span>Jun</span>
                            </div>
                        </div> .post-thumb 

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">Ideas That Moved Us in 2015</a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                In <a href="#">Technology</a>
                                            </li>
                                        </ul>
                                    </div> .entry-meta 
                                </div> /.entry-header 
                            </header> /.entry-header-wrapper 

                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
                            </div> .entry-content 

                        </div> /.blog-content 

                    </article> /.post-wrapper 
                </div> /.col-md-4 

                <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="#"><img src="assets/img/blog/blog-18.jpg" class="img-responsive" alt="" ></a>
                            <div class="post-date">
                                25<span>Jun</span>
                            </div>
                        </div> .post-thumb 

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">Ideas That Moved Us in 2015</a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                In <a href="#">Technology</a>
                                            </li>
                                        </ul>
                                    </div> .entry-meta 
                                </div> /.entry-header 
                            </header> /.entry-header-wrapper 

                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
                            </div> .entry-content 

                        </div> /.blog-content 

                    </article> /.post-wrapper 
                </div> /.col-md-4 

                <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="#"><img src="assets/img/blog/blog-2.jpg" class="img-responsive" alt="" ></a>
                            <div class="post-date">
                                25<span>Jun</span>
                            </div>
                        </div> .post-thumb 

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">Ideas That Moved Us in 2015</a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                In <a href="#">Technology</a>
                                            </li>
                                        </ul>
                                    </div> .entry-meta 
                                </div> /.entry-header 
                            </header> /.entry-header-wrapper 

                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
                            </div> .entry-content 

                        </div> /.blog-content 

                    </article> /.post-wrapper 
                </div> /.col-md-4 

                <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="#"><img src="assets/img/blog/blog-3.jpg" class="img-responsive" alt="" ></a>
                            <div class="post-date">
                                25<span>Jun</span>
                            </div>
                        </div> .post-thumb 

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">Ideas That Moved Us in 2015</a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                In <a href="#">Technology</a>
                                            </li>
                                        </ul>
                                    </div> .entry-meta 
                                </div> /.entry-header 
                            </header> /.entry-header-wrapper 

                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
                            </div> .entry-content 

                        </div> /.blog-content 

                    </article> /.post-wrapper 
                </div> /.col-md-4 

                <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="#"><img src="assets/img/blog/blog-15.jpg" class="img-responsive" alt="" ></a>
                            <div class="post-date">
                                25<span>Jun</span>
                            </div>
                        </div> .post-thumb 

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">Ideas That Moved Us in 2015</a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                In <a href="#">Technology</a>
                                            </li>
                                        </ul>
                                    </div> .entry-meta 
                                </div> /.entry-header 
                            </header> /.entry-header-wrapper 

                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
                            </div> .entry-content 

                        </div> /.blog-content 

                    </article> /.post-wrapper 
                </div> /.col-md-4 

                <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                    <article class="post-wrapper">

                        <div class="thumb-wrapper waves-effect waves-block waves-light">
                            <a href="#"><img src="assets/img/blog/blog-6.jpg" class="img-responsive" alt="" ></a>
                            <div class="post-date">
                                25<span>Jun</span>
                            </div>
                        </div> .post-thumb 

                        <div class="blog-content">

                            <div class="hover-overlay light-blue"></div>

                            <header class="entry-header-wrapper">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">Ideas That Moved Us in 2015</a></h2>

                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li>
                                                By <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                In <a href="#">Technology</a>
                                            </li>
                                        </ul>
                                    </div> .entry-meta 
                                </div> /.entry-header 
                            </header> /.entry-header-wrapper 

                            <div class="entry-content">
                                <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
                            </div> .entry-content 

                        </div> /.blog-content 

                    </article> /.post-wrapper 
                </div> /.col-md-4 -->

            </div><!-- /#blogGrid -->

        </div><!-- /.row -->
        
        <?= LinkPager::widget([
            'pagination' => $pages,
            'options' => [
                'class' => 'pagination post-pagination text-center mt-50',
            ],
            'linkOptions' => [
                'class' => 'waves-effect waves-light',
            ],
            'disabledPageCssClass' => 'waves-effect waves-light',
            'activePageCssClass' => 'current',
        ]) ?>


    </div><!-- /.container -->
</section>
<!-- Grid News End -->