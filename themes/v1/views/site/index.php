<?php

use app\helpers\Url;
use app\models\Config;
use app\widgets\BlogSectionWidget;
use app\widgets\ContactUsWidget;
use app\widgets\GoogleMapWidget;
use app\widgets\PortfolioWidget;
use app\widgets\SubscribeFormWidget;
use app\widgets\TestimonialWidget;


$this->title = Config::getAppMotto();

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords(Config::getAppMetaKey());
$this->registerMetaDescription(Config::getAppMetaDescription());
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'noindex,nofollow',
]);
$socialMedia = [
    'title' => $this->title .' - '. Yii::$app->name,
    'description' => Config::getAppMetaDescription(),
];
$this->registerMetaSocialMedia($socialMedia);

?>


        <!-- start revolution slider 5.0 -->
        <section class="rev_slider_wrapper">
         <div class="rev_slider materialize-slider" >
          <ul>

            <!-- slide 1 start --> 
            <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="<?= Url::to(['themes/v1/img/banner-1/bg.jpg']) ?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="materialize Material" data-description="">

                <!-- MAIN IMAGE -->
                <img src="<?= Url::to(['themes/v1/img/banner-1/bg.jpg']) ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide"
                    data-x="['right','right','right','right']" data-hoffset="['0','0','-70','-70']" 
                    data-y="['top','top','top','top']" data-voffset="['0','0','-30','-30']" 
                    data-transform_idle="o:1;"
                    data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2000"
                    style="z-index: 5;">
                        <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/book.jpg']) ?>">
                        </div>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme"
                    data-x="left"
                    data-y="center" data-voffset="-150"
                    data-transform_idle="o:1;"
                    data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2000"
                    style="z-index: 5;">
                        <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/glasses.jpg']) ?>">
                        </div>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme"
                    data-x="left"
                    data-y="bottom" data-voffset="100"
                    data-transform_idle="o:1;"
                    data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/earphones.jpg']) ?>">
                        </div>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide" 
                    data-x="['right','right','right','right']" data-hoffset="['0','0','-50','-50']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                    data-transform_idle="o:1;"
                    data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/cup.jpg']) ?>">
                        </div>
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme"
                    data-x="center"
                    data-y="center" data-voffset="-100" 
                    data-fontsize="['70','70','70','45']"
                    data-lineheight="['70','70','70','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="800" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap;">We Are Materialize
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme rev-subheading white-text text-center"
                    data-x="center"
                    data-y="center" 
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">materialize is an interactive agency. Which develops websites <br> and premium mobile applications.
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rev-btn"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:default;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1200" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap;">
                    <a href="#" class="btn btn-lg  waves-effect waves-light">Explore More</a>
                </div>


                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-70','-70','-170','-170']" 
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="<?= Url::to(['themes/v1/img/banner-1/dummy.jpg']) ?>" alt="" data-lazyload="<?= Url::to(['themes/v1/img/banner-1/macbook.jpg']) ?>assets/img/banner-1/macbook.png">
                        </div>
                </div>
            </li>
            <!-- slide 1 end -->

            <!-- slide 2 start --> 
            <li data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/img/banner-2/bg.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Unique Design" data-description="">
                
                <!-- MAIN IMAGE -->
                <img src="<?= Url::to(['themes/v1/img/banner-2/bg.jpg']) ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide"
                    data-x="['right','right','right','right']" data-hoffset="['0','0','-170','-170']" 
                    data-y="['top','top','top','top']" data-voffset="['0','0','-90','-90']" 
                    data-transform_idle="o:1;"
                    data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2000"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/book.png">
                        </div>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide"
                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                    data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                    data-transform_idle="o:1;"
                    data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2000"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/flower.png">
                        </div>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme"
                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','-90','-90']"

                    data-transform_idle="o:1;"
                    data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/box.png">
                        </div>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide" 
                    data-x="['right','right','right','right']" data-hoffset="['0','0','-150','-150']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                    data-transform_idle="o:1;"
                    data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/tube.png">
                        </div>
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme"
                    data-x="center"
                    data-y="center" data-voffset="-100" 
                    data-fontsize="['70','70','70','45']"
                    data-lineheight="['70','70','70','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="800" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap;">We Build Brands
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme rev-subheading white-text text-center"
                    data-x="center"
                    data-y="center" 
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">materialize is an interactive agency. Which develops websites <br> and premium mobile applications.
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rev-btn"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:default;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1200" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap;">
                    <a href="#" class="btn btn-lg  waves-effect waves-light">Explore More</a>
                </div>


                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-120','-120','-170','-170']" 
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/ipad.png">
                        </div>
                </div>
            </li>
            <!-- slide 2 end -->
         
          </ul>             
         </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->


        <section class="section-padding">
            <div class="container">

              <div class="text-center mb-80">
                  <h2 class="section-title text-uppercase">What we do</h2>
                  <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
              </div>

              <div class="row equal-height-row">
                  <div class="col-md-4 mb-30">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE3B7;</i>
                          </div>
                          <div class="desc">
                              <h2>Creative Design</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4 mb-30">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE326;</i>
                          </div>
                          <div class="desc">
                              <h2>Responsive Design</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4 mb-30">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE8B8;</i>
                          </div>
                          <div class="desc">
                              <h2>Flexible Page Builder</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE325;</i>
                          </div>
                          <div class="desc">
                              <h2>Mobile Applicaion Design</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE3B0;</i>
                          </div>
                          <div class="desc">
                              <h2>Professional Photography</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE62E;</i>
                          </div>
                          <div class="desc">
                              <h2>Moting Graphics Design</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->
              </div><!-- /.row -->

            </div><!-- /.container -->
        </section>

         <section class="counter-section facts-two banner-10 parallax-bg bg-fixed overlay light-9" data-stellar-background-ratio="0.5">
              <div class="container">

                  <div class="row text-center">
                      <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE87E;</i>
                        <?php $happyCustomer = Config::getCounterHappyCustomer(); ?>
                        <span class="timer"><?= $happyCustomer->value ?></span>
                        <span class="count-description"><?= $happyCustomer->label ?></span>
                      </div> <!-- /.col-sm-3 -->

                      <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE863;</i>
                        <?php $ourEmployee = Config::getCounterOurEmployee(); ?>
                        <span class="timer"><?= $ourEmployee->value ?></span>
                        <span class="count-description"><?= $ourEmployee->label ?></span>
                      </div><!-- /.col-sm-3 -->

                      <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE8F8;</i>
                        <?php $projectCompleted = Config::getCounterProjectCompleted(); ?>
                        <span class="timer"><?= $projectCompleted->value ?></span>
                        <span class="count-description"><?= $projectCompleted->label ?></span>
                      </div><!-- /.col-sm-3 -->

                      <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE90F;</i>
                        <?php $yearOfExperience = Config::getCounterProjectCompleted(); ?>
                        <span class="timer"><?= $yearOfExperience->value ?></span>
                        <span class="count-description"><?= $yearOfExperience->label ?></span>
                      </div><!-- /.col-sm-3 -->
                  </div>
              </div><!-- /.container -->
        </section>

        <?= PortfolioWidget::widget() ?>

        <?= TestimonialWidget::widget() ?>

        <?= BlogSectionWidget::widget() ?>

        <?= SubscribeFormWidget::widget() ?>

        <?= ContactUsWidget::widget(['model' => $contactModel]) ?>
        
        <?= GoogleMapWidget::widget() ?>