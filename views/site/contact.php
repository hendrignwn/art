<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
            <!-- Service Section-->
            <section id="service" class="service padding-top-90">
                <div class="container">
                    <div class="row">
                        <!--  Heading-->
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="head_title text-center">
                                <h2>Services We offer</h2>
                                <div class="separator_area">
                                    <div class="separatorhome3auto1"></div>
                                    <div class="separatorhome3auto"></div>
                                </div>
                                <p>Making your way in the world today takes everything you haveve got taking a break from all your worries 
                                    sure would help a lot thank you for being a friend travelled down to the road sides.</p>
                            </div>
                        </div>

                        <div class="thu_service_content_area">
                            <!-- Service LEFT SIDE -->
                            <div class="col-md-4 thu_service_left">
                                <!-- Service -->

                                <div class="thu_service_items">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <div class="text-right">
                                                <h4 class="main-color text-uppercase">Property Sketching</h4>
                                                <p>You wanna be where you can see our troubles are all the same wanna where</p>
                                            </div>
                                        </div>

                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="icon icon-ruler-and-pencil"></span>
                                                </div>    
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end Single Service item -->

                                <!-- Service -->
                                <div class="thu_service_items">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <div class="text-right">
                                                <h4 class="main-color text-uppercase">Interior Designing</h4>
                                                <p> You wanna be where you can see our troubles are all the same wanna where</p>
                                            </div>
                                        </div>

                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="icon icon-flat-plan"></span>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Single Service item -->

                                <!-- Service -->
                                <div class="thu_service_items">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <div class="text-right">
                                                <h4 class="main-color text-uppercase">Exterior Designing</h4>
                                                <p>You wanna be where you can see our troubles are all the same wanna where</p>
                                            </div>
                                        </div>
                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="icon icon-city-hall-building-architecture"></span>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Single Service item -->


                            </div>
                            <!-- /END Service LEFT -->

                            <!-- PHONE IMAGE -->
                            <div class="col-md-4">
                                <div class="service-img">
                                    <img src="assets/images/thu-service-md.png" alt="Architect Img">
                                </div>
                            </div>

                            <!-- Service RIGHT -->
                            <div class="col-md-4 thu_service_right" >

                                <!-- Service -->
                                <div class="thu_service_items">
                                    <div class="row">

                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="icon icon-documents"></span>
                                                </div>    
                                            </div>
                                        </div>

                                        <div class="col-xs-9">
                                            <div class="thu_service_right p-l-15">
                                                <h4 class="main-color text-uppercase">Plan Certification</h4>
                                                <p>You wanna be where you can see our troubles are all the same wanna where</p>
                                            </div>
                                        </div>

                                    </div>

                                </div> <!-- end Single Service item -->



                                <!-- Service -->
                                <div class="thu_service_items">
                                    <div class="row">

                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="icon icon-column"></span>
                                                </div>    
                                            </div>
                                        </div>

                                        <div class="col-xs-9">
                                            <div class="thu_service_right p-l-15">
                                                <h4 class="main-color text-uppercase">Plan Approvals</h4>
                                                <p>You wanna be where you can see our troubles are all the same wanna where</p>
                                            </div>
                                        </div>

                                    </div>

                                </div><!-- end Single Service item -->  

                                <!-- Service -->
                                <div class="thu_service_items">
                                    <div class="row">
                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="icon icon-calculator"></span>
                                                </div>    
                                            </div>
                                        </div>

                                        <div class="col-xs-9">
                                            <div class="thu_service_right p-l-15">
                                                <h4 class="main-color text-uppercase">Plan Estimations</h4>
                                                <p>You wanna be where you can see our troubles are all the same wanna where</p>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- end Single Service item --> 


                            </div><!-- /END Service RIGHT -->
                        </div>
                    </div> <!--End off row -->
                </div> <!-- End off container -->
            </section> <!-- End off Thu Service section -->



            <!--  Counter section -->
            <section id="counter" class="lli_counter">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="lli_main_counter_area thu_main_counter_area text-center sections textwhite">

                            <div class="col-md-3">
                                <div class="lli_counter_item">
                                    <h1 class="wow fadeInDown animated"><span class="statistic-counter">180</span>+</h1>
                                    <p class="wow fadeInUp text-uppercase animated">Years of Experience</p>
                                    <span class="icon icon-constructor"></span>
                                </div>
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="lli_counter_item">
                                    <h1 class="wow fadeInDown animated"><span class="statistic-counter">220</span>+</h1>
                                    <p class="wow fadeInUp text-uppercase animated">Projects Completed</p>
                                    <span class="icon icon-drawing-architecture-project-of-a-house"></span>
                                </div>
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="lli_counter_item">
                                    <h1 class="wow fadeInDown animated"><span class="statistic-counter">900</span>+</h1>
                                    <p class="wow fadeInUp text-uppercase animated">Happy Customers</p>
                                    <span class="icon icon-journalist-woman-talking-about-culture"></span>
                                </div>
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="lli_counter_item">
                                    <h1 class="wow fadeInDown animated"><span class="statistic-counter">750</span>+</h1>
                                    <p class="wow fadeInUp text-uppercase animated">Our Employees</p>
                                    <span class="icon icon-constructor-with-hat-and-a-gear"></span>
                                </div>
                            </div><!-- End off col-md-3 -->

                        </div><!-- End off Counter main area -->
                    </div><!-- End off row -->
                </div><!-- End off Container -->
            </section><!-- End off Counter section -->



            <!-- Team section -->
            <section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <div class="main_team_area home1_main_team_area thu_main_team_area lli_main_team_area text-center margin-top-80">

                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="head_title text-center">
                                    <h2>Our Team Members</h2>
                                    <p>A crew made with Talented People</p>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="main_team_slider wow fadeInUp">
                                    <div class="col-sm-3">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="assets/images/lli-team-img1.jpg" alt="">
                                                <div class="single_team_overlay textwhite">
                                                    <p class="author_pod">Co Founder / Architect</p>
                                                    <div class="team_socail">
                                                        <a href="#"><i class="fa fa-facebook"></i></a> 
                                                        <a href="#"><i class="fa fa-twitter"></i></a> 
                                                        <a href="#"><i class="fa fa-google-plus"></i></a> 
                                                        <a href="#"><i class="fa fa-linkedin"></i></a> 
                                                    </div>
                                                    <p>We finally got a piece of the pie!
                                                        Why do we always come here</p>
                                                </div>
                                                <div class="single_team_text">
                                                    <h6>Ananthan Ramasamy</h6>
                                                </div>
                                            </div>

                                        </div><!-- End off Item -->
                                    </div><!-- End off col-sm-3-->

                                    <div class="col-sm-3">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="assets/images/team2.jpg" alt="">
                                                <div class="single_team_overlay textwhite">
                                                    <p class="author_pod">Co Founder / Architect</p>
                                                    <div class="team_socail">
                                                        <a href="#"><i class="fa fa-facebook"></i></a> 
                                                        <a href="#"><i class="fa fa-twitter"></i></a> 
                                                        <a href="#"><i class="fa fa-google-plus"></i></a> 
                                                        <a href="#"><i class="fa fa-linkedin"></i></a> 
                                                    </div>
                                                    <p>We finally got a piece of the pie!
                                                        Why do we always come here</p>
                                                </div>
                                                <div class="single_team_text">
                                                    <h6>Azhagan Marimuthu</h6>
                                                </div>
                                            </div>
                                        </div><!-- End off Item -->
                                    </div><!-- End off col-sm-3-->

                                    <div class="col-sm-3">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="assets/images/team3.jpg" alt="">
                                                <div class="single_team_overlay textwhite">
                                                    <p class="author_pod">Co Founder / Architect</p>
                                                    <div class="team_socail">
                                                        <a href="#"><i class="fa fa-facebook"></i></a> 
                                                        <a href="#"><i class="fa fa-twitter"></i></a> 
                                                        <a href="#"><i class="fa fa-google-plus"></i></a> 
                                                        <a href="#"><i class="fa fa-linkedin"></i></a> 
                                                    </div>
                                                    <p>We finally got a piece of the pie!
                                                        Why do we always come here</p>
                                                </div>
                                                <div class="single_team_text">
                                                    <h6>Thenmalai Karupan</h6>
                                                </div>
                                            </div>
                                        </div><!-- End off Item -->
                                    </div><!-- End off col-sm-3-->

                                    <div class="col-sm-3">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="assets/images/team4.jpg" alt="">
                                                <div class="single_team_overlay textwhite">
                                                    <p class="author_pod">Co Founder / Architect</p>
                                                    <div class="team_socail">
                                                        <a href="#"><i class="fa fa-facebook"></i></a> 
                                                        <a href="#"><i class="fa fa-twitter"></i></a> 
                                                        <a href="#"><i class="fa fa-google-plus"></i></a> 
                                                        <a href="#"><i class="fa fa-linkedin"></i></a> 
                                                    </div>
                                                    <p>We finally got a piece of the pie!
                                                        Why do we always come here</p>
                                                </div>
                                                <div class="single_team_text">
                                                    <h6>Kupan Ilavarasan</h6>
                                                </div>
                                            </div>
                                        </div><!-- End off Item -->
                                    </div><!-- End off col-sm-3-->

                                    <div class="col-sm-3">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="assets/images/team1.jpg" alt="">
                                                <div class="single_team_overlay textwhite">
                                                    <p class="author_pod">Co Founder / Architect</p>
                                                    <div class="team_socail">
                                                        <a href="#"><i class="fa fa-facebook"></i></a> 
                                                        <a href="#"><i class="fa fa-twitter"></i></a> 
                                                        <a href="#"><i class="fa fa-google-plus"></i></a> 
                                                        <a href="#"><i class="fa fa-linkedin"></i></a> 
                                                    </div>
                                                    <p>We finally got a piece of the pie!
                                                        Why do we always come here</p>
                                                </div>
                                                <div class="single_team_text">
                                                    <h6>Thenmalai Karupan</h6>
                                                </div>
                                            </div>
                                        </div><!-- End off Item -->
                                    </div><!-- End off col-sm-3-->

                                    <div class="col-sm-3">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="assets/images/team2.jpg" alt="">
                                                <div class="single_team_overlay textwhite">
                                                    <p class="author_pod">Co Founder / Architect</p>
                                                    <div class="team_socail">
                                                        <a href="#"><i class="fa fa-facebook"></i></a> 
                                                        <a href="#"><i class="fa fa-twitter"></i></a> 
                                                        <a href="#"><i class="fa fa-google-plus"></i></a> 
                                                        <a href="#"><i class="fa fa-linkedin"></i></a> 
                                                    </div>
                                                    <p>We finally got a piece of the pie!
                                                        Why do we always come here</p>
                                                </div>
                                                <div class="single_team_text">
                                                    <h6>Kupan Ilavarasan</h6>
                                                </div>
                                            </div>
                                        </div><!-- End off Item -->
                                    </div><!-- End off col-sm-3-->

                                </div>
                            </div>
                        </div>
                    </div><!-- End of row  -->
                </div><!-- End of container  -->
            </section><!-- End off Our team section -->




            <!-- End off thu clients feedback section -->
            <section id="thu_clientsfeedback" class="thu_clientsfeedback">
                <div class="container-fluid">
                    <div class="row">
                        <div class="thu_clientsfeedback_area margin-top-20">
                            <div class="col-md-4 no-padding">
                                <div class="thu_feedback_left_skew"></div>
                            </div>
                            <div class="col-md-8 no-padding">
                                <div class="thu_feedback_right_img">
                                    <img src="assets/images/thu-feedback-right-img1.jpg" alt="" />
                                </div>
                            </div>

                            <div class="thu_clientsfeedback_content_area sections">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 no-padding">
                                            <div class="thu_clientsfeedback_content_left_text textwhite wow fadeInLeft">
                                                <h3>Testimonials</h3>
                                                <h2>Clients Feedback</h2>
                                                <p>The ship set ground on the shore of this uncharted desert isle with Gilligan</p>
                                                <p>The skipper too the millionaire and his wife. Movin' on up to the east side. We finally got a piece of the pie to the millionaire.</p>
                                            </div>
                                        </div><!-- End off client feedback conten -->

                                        <div class="col-md-8 no-padding">
                                            <div class="thu_clientsfeedback_content_right_text wow fadeInRight">

                                                <ol class="carousel-top-img list-inline">
                                                    <li><img src="assets/images/clogo1.png" alt=""></li>
                                                    <li><img src="assets/images/clogo2.png" alt=""></li>
                                                    <li><img src="assets/images/clogo3.png" alt=""></li>
                                                    <li><img src="assets/images/clogo4.png" alt=""></li>
                                                </ol>

                                                <div class="carousel slide carousel-fade margin-top-40" data-ride="carousel" id="quote-carousel">

                                                    <ol class="carousel-indicators">
                                                        <li data-target="#quote-carousel" data-slide-to="0"></li>
                                                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                                                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                                                    </ol>

                                                    <div class="carousel-inner">
                                                        <!-- item 1 -->
                                                        <div class="item active">
                                                            <div class="row fst">
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 no-padding">
                                                                            <div class="item_test_img text-left">
                                                                                <img class="img-circale" src="assets/images/testimonialimg.jpg" alt="" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <div class="item_test_content">
                                                                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                                                                                <p>  Makin their way the only way they know how that's just a little bit more
                                                                                    than the law will allow these happy days are yours and mine happy days.</p>
                                                                                <p class="author"><strong>Malai Duruvan</strong><br />CEO - Sparonio</p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- item 2 -->
                                                        <div class="item">
                                                            <div class="row fst">
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 no-padding">
                                                                            <div class="item_test_img">
                                                                                <img class="img-circale" src="assets/images/testimonialimg.jpg" alt="" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <div class="item_test_content">
                                                                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                                                                <p>  Makin their way the only way they know how that's just a little bit more than the law
                                                                                    will allow these happy days are yours and mine happy days.</p>
                                                                                <p class="author"><strong>Malai Duruvan</strong><br />CEO - Sparonio</p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- item 3 -->
                                                        <div class="item">
                                                            <div class="row fst">
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 no-padding">
                                                                            <div class="item_test_img">
                                                                                <img class="img-circale" src="assets/images/testimonialimg.jpg" alt="" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <div class="item_test_content">
                                                                                <i class="fa fa-quote-left" aria-hidden="true"></i> 
                                                                                <p>  Makin their way the only way they know how that's just a little bit
                                                                                    more than the law will allow these happy days are yours and mine happy days.</p>
                                                                                <p class="author"><strong>Malai Duruvan</strong><br />CEO - Sparonio</p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Quote 4 -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!--End off row -->
                                </div> <!-- End off container -->
                            </div><!-- End off Thu Content -->
                        </div>

                    </div> <!--End off row -->
                </div> <!-- End off container -->
            </section> <!-- End off Thu Clients feedback section -->




            <!--About Us Section-->
            <section id="about" class="thu_about sections">
                <div class="container">
                    <div class="row">
                        <div class="lli_main_about_area thu_main_about_area">

                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="head_title text-center text-uppercase">
                                    <h2>What We have for You</h2>
                                    <p>Everything has been completed already</p>
                                </div>
                            </div><!-- End off head Title -->


                            <!-- About Main content -->
                            <div class="lli_main_about_content_area margin-top-60">

                                <div class="col-md-3 no-padding">
                                    <div class="lli_about_item_left wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="400ms">
                                        <div class="lli_about_left_img">
                                            <img src="assets/images/lliaboutimg.jpg" alt="" />
                                        </div>
                                        <div class="lli_about_queat_text">
                                            <a href="#"><h4 class="text-uppercase">Get a Quote</h4></a> 
                                        </div>
                                    </div>
                                </div><!-- End off About Get Quote -->

                                <div class="col-md-9 no-padding">
                                    <div class="lli_about_item_right about_right_content">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs text-uppercase" role="tablist">
                                            <li role="presentation" class="active"><a href="#plan" aria-controls="plan" role="tab" data-toggle="tab">Plan 3d Modeling</a></li>
                                            <li role="presentation"><a href="#interior" aria-controls="interior" role="tab" data-toggle="tab">Interior Design</a></li>
                                            <li role="presentation"><a href="#exterior" aria-controls="exterior" role="tab" data-toggle="tab">Exterior Design</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="plan">
                                                <p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
                                                    Fish don't fry in the kitchen and beans don't burn on the grill took a lot of try.</p>

                                                <div class="lli_about_tiny_content_area">
                                                    <div class="row">

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-hammer-and-three-bricks-construction-symbol"></span> Property Sketching</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-house-key-square-button"></span> Technical Rendering</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-hammer-on-square-background"></span> Measurement Studies</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-infrastructure-on-square-background-with-check-mark"></span> Final Plan Mockup</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><!-- End off Tab content One -->

                                            <div role="tabpanel" class="tab-pane fade" id="interior">
                                                <p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
                                                    Fish don't fry in the kitchen and beans don't burn on the grill took a lot of try.</p>

                                                <div class="lli_about_tiny_content_area">
                                                    <div class="row">

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-hammer-and-three-bricks-construction-symbol"></span> Property Sketching</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-house-key-square-button"></span> Technical Rendering</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-hammer-on-square-background"></span> Measurement Studies</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-infrastructure-on-square-background-with-check-mark"></span> Final Plan Mockup</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><!-- End off Tab content Two -->

                                            <div role="tabpanel" class="tab-pane fade" id="exterior">
                                                <p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
                                                    Fish don't fry in the kitchen and beans don't burn on the grill took a lot of try.</p>

                                                <div class="lli_about_tiny_content_area">
                                                    <div class="row">

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-hammer-and-three-bricks-construction-symbol"></span> Property Sketching</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-house-key-square-button"></span> Technical Rendering</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-hammer-on-square-background"></span> Measurement Studies</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="lli_about_tiny_content_item margin-top-40">
                                                                <h4 class="text-uppercase"><span class="icon icon-infrastructure-on-square-background-with-check-mark"></span> Final Plan Mockup</h4>
                                                                <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><!-- End off Tabe content Three -->

                                        </div><!-- End off tabe content -->

                                    </div><!-- End off tabe area -->
                                </div>
                            </div><!-- End off About Main Content -->
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off Container -->
            </section><!-- End off About us section -->



            <!-- call us section -->
            <section id="subcribs" class="subcribs">
                <div class="container-fluid">
                    <div class="row">

                        <div class="main_subcribs_area textwhite wow fadeInUp">
                            <div class="col-md-5 no-padding">
                                <div class="subcribs_left_item_bg"></div>
                            </div>
                            <div class="col-md-7 no-padding">
                                <div class="subcribs_right_item_bg">
                                    <div class="subcribs_right_item_bg_overlay"></div>
                                </div>
                            </div>

                            <div class="main_subcribs_content_area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="subcribs_content_item_left margin-top-20">
                                                <span class="icon icon-mail-send"></span>
                                                <h3>Subscribe</h3>
                                                <h2>Our Newsletter</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="subcribs_content_item_right">
                                                <div class="subcribs_news_letter">
                                                    <form id="mailchimp" class="mailchimp form-inline" role="form" >

                                                        <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                                                        <div class="subscription-success"></div>
                                                        <div class="subscription-error"></div>

                                                        <div class="pos-rel">
                                                            <input class="form-control input-lg" type="text"   placeholder="Enter Your Email Address" name="email">
                                                            <button type="submit" id="subscribe-button" class="btn button hvr-bounce-to-bottom">Subscribe</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--End off Subcrib area -->

                    </div> <!--End off row -->
                </div> <!-- End off container -->
            </section> <!-- End off call us section -->