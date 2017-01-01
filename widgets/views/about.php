<?php

use yii\bootstrap\Html;

?>

<section id="about" class="lliabout">
    <div class="container">
        <div class="row">
            <div class="lli_main_about_area margin-top-120 margin-bottom-120">

                <div class="col-xs-8 col-xs-offset-2">
                    <div class="head_title text-center text-uppercase">
                        <h2>What We have for You</h2>
                        <p>Everything has been completed already</p>
                    </div>
                </div><!-- End off head Title -->


                <!-- About Main content -->
                <div class="lli_main_about_content_area margin-top-60">

                    <div class="col-md-12 no-padding">
                        <div class="lli_about_item_right">

                            <div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs text-uppercase" role="tablist">
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
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php
                                        $no = 0;
                                        foreach($abouts as $about) {
                                            echo Html::tag('div', $about->description, [
                                                'role'=>'tabpanel',
                                                'class'=>'tab-pane fade in '.($no==0 ? 'active':''),
                                                'id'=>$about->category->slug,
                                            ]);
                                            $no++;
                                        }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- End off About Main Content -->
            </div>
        </div><!-- End off row -->
    </div><!-- End off Container -->
</section><!-- End off About us section -->