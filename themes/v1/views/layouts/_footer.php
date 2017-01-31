<?php

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
                    <h2 class="white-text">News Letter Widget</h2>

                    <form>
                        <div class="form-group clearfix">
                            <label class="sr-only" for="subscribe">Email address</label>
                            <input type="email" class="form-control" id="subscribe" placeholder="Email address">
                            <button type="submit" class="tt-animate ltr"><i class="fa fa-long-arrow-right"></i></button>
                        </div>
                    </form>


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
            <span class="copy-text">Copyright &copy; 2016 <?= Html::a(Config::getAppCopyright(), \Yii::$app->getHomeUrl()) ?> &nbsp;  | &nbsp;  All Rights Reserved</span>
        </div><!-- /.container -->
    </div><!-- /.secondary-footer -->
</footer>