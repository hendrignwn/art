<?php

use yii\db\Migration;

class m161229_180403_import_page_data extends Migration
{
    public function safeUp()
    {
        $this->insert('{{page}}', ['id'=>1,'name'=>'What We Have For You', 'slug'=>'about-us', 'description'=>
'<section id="about" class="lliabout">
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
                                    <li role="presentation" class="active"><a href="#plan" aria-controls="plan" role="tab" data-toggle="tab">Web Development</a></li>
                                    <li role="presentation"><a href="#interior" aria-controls="interior" role="tab" data-toggle="tab">Network Development</a></li>
                                    <li role="presentation"><a href="#exterior" aria-controls="exterior" role="tab" data-toggle="tab">Open Training</a></li>
                                    <li role="presentation"><a href="#eee" aria-controls="eee" role="tab" data-toggle="tab">Open Workshop</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="plan">
                                        <p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
                                            Fish don\'t fry in the kitchen and beans don\'t burn on the grill took a lot of try.</p>

                                        <div class="lli_about_tiny_content_area">
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-ruler-and-pencil"></span> Property Sketching</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-computer-mouse-with-long-cable"></span> Technical Rendering</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-flat-plan"></span> Measurement Studies</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-column"></span> Final Plan Mockup</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- End off Tab content One -->

                                    <div role="tabpanel" class="tab-pane fade" id="interior">
                                        <p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
                                            Fish don\'t fry in the kitchen and beans don\'t burn on the grill took a lot of try.</p>

                                        <div class="lli_about_tiny_content_area">
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-ruler-and-pencil"></span> Property Sketching</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-computer-mouse-with-long-cable"></span> Technical Rendering</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-flat-plan"></span> Measurement Studies</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-column"></span> Final Plan Mockup</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- End off Tab content Two -->

                                    <div role="tabpanel" class="tab-pane fade" id="exterior">
                                        <p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
                                            Fish don\'t fry in the kitchen and beans don\'t burn on the grill took a lot of try.</p>

                                        <div class="lli_about_tiny_content_area">
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-ruler-and-pencil"></span> Property Sketching</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-computer-mouse-with-long-cable"></span> Technical Rendering</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-flat-plan"></span> Measurement Studies</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-column"></span> Final Plan Mockup</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- End off Tabe content Three -->
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="eee">
                                        <p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
                                            Fish don\'t fry in the kitchen and beans don\'t burn on the grill took a lot of try.</p>

                                        <div class="lli_about_tiny_content_area">
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-ruler-and-pencil"></span> Property Sketching</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-computer-mouse-with-long-cable"></span> Technical Rendering</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-flat-plan"></span> Measurement Studies</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="lli_about_tiny_content_item margin-top-40">
                                                        <h4 class="text-uppercase"><span class="icon icon-column"></span> Final Plan Mockup</h4>
                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- End off Tabe content Three -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- End off About Main Content -->
            </div>
        </div><!-- End off row -->
    </div><!-- End off Container -->
</section><!-- End off About us section -->','metakey'=>'Software Application,Network Development, Training Center, Workshop Center', 'metadesc'=>'semua tentang ATC Art Techno Corporation', 'category'=>'partial']);
    }

    public function safeDown()
    {
        $this->truncateTable('{{page}}');
    }
}
