<?php

use app\models\Config;
use yii\bootstrap\Html;
use yii\helpers\Url;


?>

<nav class="navbar lli_menu navbar-default navbar-fixed navbar-mobile bootsnav">

    <div class="head_top_social_area">
        <div class="container">
            <div class="row">
                <div class="head_top_callus">
                    <div class="col-sm-9 col-xs-12">
                        <ul class="list-inline helpdesk">
                            <li>
                                <?= Html::a(
                                        Html::tag('span', '', ['class'=>'icon icon-Pointer']) . Config::getAppContactAddress(),
                                        '#'
                                    ) ?>
                            </li>
                            <li>
                                <?= Html::a(
                                        Html::tag('span', '', ['class'=>'icon icon-Phone2']) . Config::getAppContactPhone(),
                                        '#'
                                    ) ?>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-3 col-xs-12">
                        <div class="top_socail_icon_area">
                            <ul class="list-inline">
                                <li>
                                    <?= Html::a(
                                        Html::tag('i', '', ['class'=>'fa fa-facebook']),
                                        Config::getAppAccountFacebook(),
                                        ['target'=>'_blank']
                                    ) ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Html::tag('i', '', ['class'=>'fa fa-twitter']),
                                        Config::getAppAccountTwitter(),
                                        ['target'=>'_blank']
                                    ) ?>
                                </li>
                                <li>
                                    <?= Html::a(
                                        Html::tag('i', '', ['class'=>'fa fa-google-plus']),
                                        Config::getAppAccountGooglePlus(),
                                        ['target'=>'_blank']
                                    ) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--navbar menu-->
    <div class="container-fluid"> 
        <div class="row"> 
            <div class="container">
                <div class="row">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle lli" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <?= Html::a(
                                Html::img(
                                        Url::to(['static/images/main-logo.png'], true), 
                                        ['class'=>'logo', 'alt'=>'Art Techno Corporation']
                                        ),
                                Url::home(),
                                ['class'=>'navbar-brand']
                                ) ?>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <ul class="nav navbar-nav navbar-right text-uppercase" data-in="fadeIn" data-out="fadeOut">
                            <li class="lli_effect"><a href="#home">Home</a></li>   
                            <li class="lli_effect"><a href="#about">About</a></li>  
                            <li class="lli_effect"><a href="#projects">Projects</a></li>
                            <li class="lli_effect"><a href="#service">Services</a></li>  
<!--                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="home-one-landing-page.html">Home one</a></li>
                                            <li><a href="home-two-landing-page.html">Home Two</a></li>
                                            <li><a href="home-three-landing-page.html">Home Three</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="our-service.html">Our Service</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-post-01.html">Blog-Post-01</a></li>
                                            <li><a href="blog-post-02.html">Blog-Post-02</a></li>
                                            <li><a href="blog-single.html">Blog-Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Project</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="team-grid.html">Team-Grid</a></li>
                                            <li><a href="team-single-details.html">Team-Single-Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Gallery</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="gallery-3-column.html">Gallery-3-Column</a></li>
                                            <li><a href="gallery-4-column.html">Gallery-4-Column</a></li>
                                            <li><a href="gallery-fullwidth.html">Gallery-Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="get-quote.html">Get-Quote</a></li>
                                    <li><a href="404-Error.html">404 Error</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </li>  -->
                            <li class="lli_effect"><a href="#blog">Blog</a></li> 
                            <li class="lli_effect"><a href="#footer_weidget">Contact</a></li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div>
            </div>
        </div>   
    </div>   
</nav><!-- End off Nav -->