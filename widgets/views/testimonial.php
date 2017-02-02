<?php

/* @var $testimonials app\models\Testimonial */

?>

<section class="padding-top-110 padding-bottom-70 brand-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="quote-carousel text-center">
                    
                    <?php foreach($testimonials as $testimonial) : ?>
                    <div class="carousel-item">
                        <div class="content">
                            <h2 class="white-text line-height-40">"<?= $testimonial->description ?>"</h2>

                            <div class="testimonial-meta font-20 text-extrabold white-text">
                                <?= $testimonial->name ?>
                            </div>
                            <div class="testimonial-meta font-14 text-bold white-text">
                                <?= $testimonial->professional ?>
                            </div>
                        </div><!-- /.content -->
                    </div><!-- /.carousel-item -->
                    <?php endforeach; ?>

                </div>
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>