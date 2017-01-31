<?php

use yii\helpers\Url;


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
                <li class="waves-effect waves-light" data-group="websites">Websites</li>
                <li class="waves-effect waves-light" data-group="branding">Branding</li>
                <li class="waves-effect waves-light" data-group="marketing">Marketing</li>
                <li class="waves-effect waves-light" data-group="photography">Photography</li>
            </ul>

            <div class="portfolio portfolio-with-title col-3 gutter mt-50">

                <div class="portfolio-item" data-groups='["all", "branding", "photography"]'>
                    <div class="portfolio-wrapper">

                        <div class="thumb">
                            <div class="bg-overlay brand-overlay"></div>
                            <img src="<?= Url::to(['themes/v1/img/portfolio/portfolio-1.jpg']) ?>" alt="">

                            <div class="portfolio-intro">
                                <div class="action-btn">
                                    <a href="<?= Url::to(['themes/v1/img/portfolio/portfolio-1.jpg']) ?>" class="tt-lightbox" title="iOS Game Design"> <i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div><!-- thumb -->

                        <div class="portfolio-title">
                            <h2><a href="#">Portfolio Title 1</a></h2>
                            <p><a href="#">iOS Design</a> </p>
                        </div>

                    </div><!-- /.portfolio-wrapper -->
                </div><!-- /.portfolio-item -->

                <div class="portfolio-item" data-groups='["all", "marketing", "websites"]'> 
                    <div class="portfolio-wrapper">
                        <div class="thumb">
                            <div class="bg-overlay brand-overlay"></div>
                            <img src="assets/img/portfolio/portfolio-2.jpg" alt="">

                            <div class="portfolio-intro">
                                <div class="action-btn">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" class="tt-lightbox" title=""> <i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-title">
                            <h2><a href="#">Portfolio Title</a></h2>
                            <p><a href="#">Branding</a> </p>
                        </div>

                    </div><!-- /.portfolio-wrapper -->
                </div><!-- /.portfolio-item -->

                <div class="portfolio-item" data-groups='["all", "photography", "branding"]'>

                    <div class="portfolio-wrapper">
                        <div class="thumb">
                            <div class="bg-overlay brand-overlay"></div>
                            <img src="assets/img/portfolio/portfolio-3.jpg" alt="">

                            <div class="portfolio-intro">
                                <div class="action-btn">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" class="tt-lightbox" title=""> <i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-title">
                            <h2><a href="#">Portfolio Title</a></h2>
                            <p><a href="#">Branding</a> </p>
                        </div>

                    </div><!-- /.portfolio-wrapper -->
                </div><!-- /.portfolio-item -->

                <div class="portfolio-item" data-groups='["all", "websites", "branding"]'>
                    <div class="portfolio-wrapper">
                        <div class="thumb">
                            <div class="bg-overlay brand-overlay"></div>
                            <img src="assets/img/portfolio/portfolio-4.jpg" alt="">

                            <div class="portfolio-intro">
                                <div class="action-btn">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" class="tt-lightbox" title=""> <i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-title">
                            <h2><a href="#">Portfolio Title</a></h2>
                            <p><a href="#">Branding</a> </p>
                        </div>

                    </div><!-- /.portfolio-wrapper -->
                </div><!-- /.portfolio-item -->

                <div class="portfolio-item" data-groups='["all", "photography", "marketing"]'>
                    <div class="portfolio-wrapper">
                        <div class="thumb">
                            <div class="bg-overlay brand-overlay"></div>
                            <img src="assets/img/portfolio/portfolio-5.jpg" alt="">

                            <div class="portfolio-intro">
                                <div class="action-btn">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" class="tt-lightbox" title=""> <i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-title">
                            <h2><a href="#">Portfolio Title</a></h2>
                            <p><a href="#">Branding</a> </p>
                        </div>

                    </div><!-- /.portfolio-wrapper -->
                </div><!-- /.portfolio-item -->

                <div class="portfolio-item" data-groups='["all", "websites",  "marketing"]'>
                    <div class="portfolio-wrapper">
                        <div class="thumb">
                            <div class="bg-overlay brand-overlay"></div>
                            <img src="assets/img/portfolio/portfolio-6.jpg" alt="">

                            <div class="portfolio-intro">
                                <div class="action-btn">
                                    <a href="#."> <i class="fa fa-link"></i>  </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-title">
                            <h2><a href="#">Portfolio Title</a></h2>
                            <p><a href="#">Branding</a> </p>
                        </div>

                    </div><!-- /.portfolio-wrapper -->
                </div><!-- /.portfolio-item -->

            </div><!-- /.portfolio -->

            <div class="load-more-button text-center">
                <a class="waves-effect waves-light btn mt-30"> <i class="fa fa-spinner left"></i> View All</a>
            </div>

        </div><!-- portfolio-container -->

    </div><!-- /.container -->
</section>