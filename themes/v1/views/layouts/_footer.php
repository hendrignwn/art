<?php

use app\helpers\Url;
use app\models\BlogTag;
use app\models\Config;
use app\models\Menu as Menu2;
use yii\helpers\Html;
use yii\widgets\Menu;

?>

<!--footer 1 start -->
<footer class="footer footer-one">
    <div class="primary-footer brand-bg">
        <div class="container">
            <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
                <i class="material-icons">&#xE316;</i>
            </a>

            <div class="row">
                <div class="col-md-3 widget clearfix">
                    <h2 class="white-text">Contact Us</h2>
                    <address class="white-text">
                        <i class="material-icons pull-left" style="margin-right:10px;margin-bottom:10px;"></i>
                        <div class="address">
                            <p style="margin-bottom:10px"><?= Config::getAppContactAddress() ?></p>
                        </div>

                        <i class="material-icons pull-left" style="margin-right:10px;margin-bottom:10px;"></i>
                        <div class="phone">
                            <p style="margin-bottom:10px">Phone: <?= Config::getAppContactPhone() ?></p>
                        </div>

                        <i class="material-icons pull-left" style="margin-right:10px;margin-bottom:10px;"></i>
                        <div class="mail">
                            <p style="margin-bottom:10px"><?= Config::getAppContactEmail() ?></p>
                        </div>
                    </address>

                    <?= Menu::widget([
                        'options' => ['class' => 'social-link tt-animate ltr'],
                        'items' => [
                            [
                                'label' => '<i class=\'fa fa-facebook\'></i>',
                                'url' => Config::getAppAccountFacebook(),
                                'options' => ['target'=>'_blank'],
                                'encode' => false,
                            ],
                            [
                                'label' => '<i class=\'fa fa-twitter\'></i>',
                                'url' => Config::getAppAccountTwitter(),
                                'options' => ['target'=>'_blank'],
                                'encode' => false,
                            ],
                            [
                                'label' => '<i class=\'fa fa-google-plus\'></i>',
                                'url' => Config::getAppAccountGooglePlus(),
                                'options' => ['target'=>'_blank'],
                                'encode' => false,
                            ],
                        ],
                    ]) ?>
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 widget">
                    <h2 class="white-text">Imporant links</h2>

                    <?= Menu::widget([
                        'options' => ['class' => 'footer-list'],
                        'items' => (new Menu2())->getMenus(Menu2::CATEGORY_MAIN_FOOTER),
                    ]) ?>
                    
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 widget">
                    <h2 class="white-text">Twitter feed</h2>

                    <div id="twitterfeed" class="twitter-widget-wrapper"></div>
                </div><!-- /.col-md-3 -->


                <div class="col-md-3 widget">
                    <div class="widget-tags">
                        <h2 class="white-text">Blog Tags</h2>
                        <?php
                        $tags = BlogTag::find()->limit(9)->all();
                        foreach($tags as $tag) {
                            echo Html::a($tag->name, $tag->getUrl());
                        }
                        ?>
                    </div><!-- /.widget-tags -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.primary-footer -->

    <div class="secondary-footer brand-bg darken-2">
        <div class="container">
            <span class="copy-text">Copyright &copy; 2016 <?= Html::a(Config::getAppCopyright(), Yii::$app->getHomeUrl()) ?> &nbsp;  | &nbsp;  All Rights Reserved</span>
        </div><!-- /.container -->
    </div><!-- /.secondary-footer -->
</footer>
<div style="display:none;" itemscope itemtype="http://schema.org/LocalBusiness">
    <h2><?= Config::getAppMotto() ?></h2>
    <span itemprop="name"><a itemprop="url" href="<?= Url::home(true) ?>"><?= Yii::$app->name ?></a></span>
    <span itemprop="description"><?= Config::getAppMetaDescription() ?></span>
    <span itemprop="logo"><?= Url::to(['data/img/logo.png'], true) ?></span>
    <span itemprop="legalName"><?= Yii::$app->name ?></span>
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span itemprop="streetAddress">Jl Purnawarman No 11, Ciampea</span>
        <span itemprop="addressLocality">Bogor</span>,
        <span itemprop="addressRegion">Jawa Barat</span>
        <span itemprop="addressCountry">Indonesia</span>
    </div>
    Phone: <span itemprop="telephone"><?= Config::getAppContactPhone() ?></span>
    Email: <span itemprop="email"><?= Config::getAppContactEmail() ?></span>
    <div itemprop="founder" itemscope itemtype="http://schema.org/Person">
        <span itemprop="name">Sandi Winata</span>
        <span itemprop="email">winatasandi05@gmail.com</span>
        <span itemprop="nationality">Indonesia</span>
    </div>
    <div itemprop="foundingDate">2017-02-05</div>
</div>