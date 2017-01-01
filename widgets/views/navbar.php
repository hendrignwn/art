<?php

use app\models\Config;
use app\widgets\MainMenuWidget;
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

                    <?= MainMenuWidget::widget($mainMenuParams) ?>
                    
                </div>
            </div>
        </div>   
    </div>   
</nav><!-- End off Nav -->