<?php

use yii\bootstrap\Html;

?>

<!--lli Service-->
<section id="service" class="lli_service">
    <div class="container-fluid">
        <div class="row">
            <div class="main_lli_service_area">
                <!--LLi service BG-->
                <div class="col-md-6 no-padding">
                    <div class="lli_service_item_left">
                        <div class="img_service_overlay_left"></div>
                        <img src="assets/images/lli-service-img-left.jpg" alt="" />
                    </div>
                </div>

                <div class="col-md-6 no-padding">
                    <div class="lli_service_item_right">
                        <div class="img_service_overlay_right"></div>
                        <img src="assets/images/lli-service-img-right.jpg" alt="" style="" />
                    </div>
                </div>
                <!-- End off LLi service BG-->

                <!--main_lli_service_content-->
                <div class="main_lli_service_content_area">
                    <div class="container">
                        <div class="row">
                            <!-- service head title -->
                            <div class="lli_service_content_head_title">
                                <div class="col-md-6">
                                    <div class="service_head_left_left text-uppercase">
                                        <h2><?= Yii::t('app', 'Services we offer') ?></h2>
                                        <p><?= Yii::t('app', 'Various Reasons to choose ATC') ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service_head_left_irght pull-right textwhite">
                                        <p><?= Yii::t('app', 'You would see the biggest gift would be from me and the card attached would say 
                                            thank you for being a friend black gold That this group some.') ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- End off lli service head title -->
                        </div>


                        <div class="row">
                            <div class="main_lli_service_content clearfix margin-top-60">
                                <div class="col-md-4 right-no-padding">
                                    <div class="lli_service_left_menu">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs lliserviceTabs" role="tablist">
                                            <?php
                                                $no = 0;
                                                foreach($categories as $slug => $category) {
                                                    $content = Html::a($category, '#'.$slug, ['arials-controls'=>$slug,'role'=>'tab','data-toggle'=>'tab']);
                                                    echo Html::tag('li', $content, [
                                                        'role'=>'presentation',
                                                        'class'=>($no==0)?'active':'',
                                                    ]);
                                                    $no++;
                                                } 
                                            ?>
<!--                                            <li role="presentation" class="active"><a href="#material" aria-controls="material" role="tab" data-toggle="tab"><span>01.</span> Material Distribution</a></li>
                                            <li role="presentation"><a href="#building" aria-controls="building" role="tab" data-toggle="tab"><span>02.</span> Building Renovation</a></li>
                                            <li role="presentation"><a href="#budget" aria-controls="budget" role="tab" data-toggle="tab"><span>03.</span> Budget Estimation</a></li>
                                            <li role="presentation"><a href="#design" aria-controls="design" role="tab" data-toggle="tab"><span>04.</span> Design Evaluation</a></li>
                                            <li role="presentation"><a href="#customer" aria-controls="customer" role="tab" data-toggle="tab"><span>05.</span> Customer Support</a></li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8 left-no-padding">
                                    <div class="lli_service_right_text">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <?php
                                                $no = 0;
                                                foreach($services as $service) {
                                                    echo Html::tag('div', $service->description, [
                                                        'role'=>'tabpanel',
                                                        'class'=>'tab-pane fade in '.($no==0 ? 'active':''),
                                                        'id'=>$service->category->slug,
                                                    ]);
                                                    $no++;
                                                }
                                            ?>
<!--                                            <div role="tabpanel" class="tab-pane active" id="material">
                                                <h4 class="text-uppercase">We never failed to satisfy our client’s</h4>
                                                <p class="margin-top-20">You would see the biggest gift would be from me and the card attached would say thank you
                                                    for being a friend? Moving on up to the east side. We finally got a piece of the pie! 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    can help.</p>

                                                 Tabs List
                                                <div class="row">
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>The card attached will say thanks</li>
                                                                <li><i class="fa fa-check-circle"></i>A museum where people come</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>You would see the biggest gift</li>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>We finally got a piece of the pie</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs List
                                                 Tabs Images
                                                <div class="row margin-top-20">
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img1.jpg"><img src="assets/images/service-tabs-img1.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img2.jpg"><img src="assets/images/service-tabs-img2.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img3.jpg"><img src="assets/images/service-tabs-img3.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img4.jpg"><img src="assets/images/service-tabs-img4.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs Images 
                                            </div> End off Tabs item panel

                                            <div role="tabpanel" class="tab-pane fade" id="building">
                                                <h4 class="text-uppercase">We never failed to satisfy our client’s</h4>
                                                <p class="margin-top-20">You would see the biggest gift would be from me and the card attached would say thank you
                                                    for being a friend? Moving on up to the east side. We finally got a piece of the pie! 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    can help.</p>

                                                 Tabs List
                                                <div class="row">
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>The card attached will say thanks</li>
                                                                <li><i class="fa fa-check-circle"></i>A museum where people come</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>You would see the biggest gift</li>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>We finally got a piece of the pie</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs List
                                                 Tabs Images
                                                <div class="row margin-top-20">
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img1.jpg"><img src="assets/images/service-tabs-img1.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img2.jpg"><img src="assets/images/service-tabs-img2.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img3.jpg"><img src="assets/images/service-tabs-img3.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img4.jpg"><img src="assets/images/service-tabs-img4.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs Images 
                                            </div> End off Tabs item panel

                                            <div role="tabpanel" class="tab-pane fade" id="budget">
                                                <h4 class="text-uppercase">We never failed to satisfy our client’s</h4>
                                                <p class="margin-top-20">You would see the biggest gift would be from me and the card attached would say thank you
                                                    for being a friend? Moving on up to the east side. We finally got a piece of the pie! 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    can help.</p>

                                                 Tabs List
                                                <div class="row">
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>The card attached will say thanks</li>
                                                                <li><i class="fa fa-check-circle"></i>A museum where people come</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>You would see the biggest gift</li>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>We finally got a piece of the pie</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs List
                                                 Tabs Images
                                                <div class="row margin-top-20">
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img1.jpg"><img src="assets/images/service-tabs-img1.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img2.jpg"><img src="assets/images/service-tabs-img2.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img3.jpg"><img src="assets/images/service-tabs-img3.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img4.jpg"><img src="assets/images/service-tabs-img4.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs Images 
                                            </div> End off Tabs item panel

                                            <div role="tabpanel" class="tab-pane fade" id="design">
                                                <h4 class="text-uppercase">We never failed to satisfy our client’s</h4>
                                                <p class="margin-top-20">You would see the biggest gift would be from me and the card attached would say thank you
                                                    for being a friend? Moving on up to the east side. We finally got a piece of the pie! 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    can help.</p>

                                                 Tabs List
                                                <div class="row">
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>The card attached will say thanks</li>
                                                                <li><i class="fa fa-check-circle"></i>A museum where people come</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>You would see the biggest gift</li>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>We finally got a piece of the pie</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs List
                                                 Tabs Images
                                                <div class="row margin-top-20">
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img1.jpg"><img src="assets/images/service-tabs-img1.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img2.jpg"><img src="assets/images/service-tabs-img2.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img3.jpg"><img src="assets/images/service-tabs-img3.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img4.jpg"><img src="assets/images/service-tabs-img4.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs Images 
                                            </div> End off Tabs item panel

                                            <div role="tabpanel" class="tab-pane fade" id="customer">
                                                <h4 class="text-uppercase">We never failed to satisfy our client’s</h4>
                                                <p class="margin-top-20">You would see the biggest gift would be from me and the card attached would say thank you
                                                    for being a friend? Moving on up to the east side. We finally got a piece of the pie! 
                                                    Why do we always come here, I guess well never know you have a problem if no one else 
                                                    can help.</p>

                                                 Tabs List
                                                <div class="row">
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>The card attached will say thanks</li>
                                                                <li><i class="fa fa-check-circle"></i>A museum where people come</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 margin-top-20">
                                                        <div class="tabe_content_list">
                                                            <ul>
                                                                <li><i class="fa fa-check-circle"></i>You would see the biggest gift</li>
                                                                <li><i class="fa fa-check-circle"></i>Just sit right back and you'll hear</li>
                                                                <li><i class="fa fa-check-circle"></i>We finally got a piece of the pie</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs List
                                                 Tabs Images
                                                <div class="row margin-top-20">
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img1.jpg"><img src="assets/images/service-tabs-img1.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img2.jpg"><img src="assets/images/service-tabs-img2.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img3.jpg"><img src="assets/images/service-tabs-img3.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 margin-top-20">
                                                        <div class="lli_service_item_img">
                                                            <a class="portfolio-img" href="assets/images/service-tabs-img4.jpg"><img src="assets/images/service-tabs-img4.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                 End Tabs Images 
                                            </div> End off Tabs item panel-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End off row -->


                    </div>
                </div><!-- End off main_lli_service_content -->

            </div>
        </div><!-- End off row -->
    </div><!-- End off Container -->
</section><!-- End off LLi Service section -->