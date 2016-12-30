<?php

use app\models\Config;

$yearOfExperience = Config::getCounterYearOfExperience();
$projectCompleted = Config::getCounterProjectCompleted();
$happyCustomer = Config::getCounterHappyCustomer();
$ourEmployee = Config::getCounterOurEmployee();

?>

<!--  Counter section -->
<section id="counter" class="lli_counter">
    <div class="overlay_dot"></div>
    <div class="container">
        <div class="row">
            <div class="lli_main_counter_area text-center sections textwhite">

                <div class="col-md-3">
                    <div class="lli_counter_item">
                        <h1 class="wow fadeInDown"><span class="statistic-counter"><?= $yearOfExperience->value > 999 ? 999 . '</span>+' : $yearOfExperience->value . '</span>' ?></h1>
                        <p class="wow fadeInUp text-uppercase"><?= $yearOfExperience->label ?></p>
                        <span class="icon icon-constructor"></span>
                    </div>
                </div><!-- End off col-md-3 -->

                <div class="col-md-3">
                    <div class="lli_counter_item">
                        <h1 class="wow fadeInDown"><span class="statistic-counter"><?= $projectCompleted->value > 999 ? 999 . '</span>+' : $projectCompleted->value . '</span>' ?></h1>
                        <p class="wow fadeInUp text-uppercase"><?= $projectCompleted->label ?></p>
                        <span class="icon icon-drawing-architecture-project-of-a-house"></span>
                    </div>
                </div><!-- End off col-md-3 -->

                <div class="col-md-3">
                    <div class="lli_counter_item">
                        <h1 class="wow fadeInDown"><span class="statistic-counter"><?= $happyCustomer->value > 999 ? 999 . '</span>+' : $happyCustomer->value . '</span>' ?></h1>
                        <p class="wow fadeInUp text-uppercase"><?= $happyCustomer->label ?></p>
                        <span class="icon icon-journalist-woman-talking-about-culture"></span>
                    </div>
                </div><!-- End off col-md-3 -->

                <div class="col-md-3">
                    <div class="lli_counter_item">
                        <h1 class="wow fadeInDown"><span class="statistic-counter"><?= $ourEmployee->value > 999 ? 999 . '</span>+' : $ourEmployee->value . '</span>' ?></h1>
                        <p class="wow fadeInUp text-uppercase"><?= $ourEmployee->label ?></p>
                        <span class="icon icon-constructor-with-hat-and-a-gear"></span>
                    </div>
                </div><!-- End off col-md-3 -->

            </div><!-- End off Counter main area -->
        </div><!-- End off row -->
    </div><!-- End off Container -->
</section><!-- End off Counter section -->