<?php

use yii\db\Migration;

class m161231_033605_import_page_static_data extends Migration
{
    public function safeUp()
    {
        $this->insert('{{page_static}}', [
            'category_id' => 1,
            'type' => 'about',
            'name'=>'Web Development', 
            'slug'=>'about-us-web-development', 
            'description'=>
'<p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
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
    </div>',
            'metakey'=>'Software Application,Network Development, Training Center, Workshop Center', 
            'metadesc'=>'semua tentang ATC Art Techno Corporation', 
            'status' => 1,
            'order' => 1,
        ]);
        $this->insert('{{page_static}}', [
            'category_id' => 2,
            'type' => 'about',
            'name'=>'Network Development', 
            'slug'=>'about-us-network-development', 
            'description'=>
'<p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
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
    </div>',
            'metakey'=>'Software Application,Network Development, Training Center, Workshop Center', 
            'metadesc'=>'semua tentang ATC Art Techno Corporation', 
            'status' => 1,
            'order' => 1,
        ]);
        $this->insert('{{page_static}}', [
            'category_id' => 3,
            'type' => 'about',
            'name'=>'Open Trainings', 
            'slug'=>'about-us-open-training', 
            'description'=>
'<p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
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
    </div>',
            'metakey'=>'Software Application,Network Development, Training Center, Workshop Center', 
            'metadesc'=>'semua tentang ATC Art Techno Corporation', 
            'status' => 1,
            'order' => 2,
        ]);
        $this->insert('{{page_static}}', [
            'category_id' => 4,
            'type' => 'about',
            'name'=>'Open Workshops', 
            'slug'=>'about-us-open-workshop', 
            'description'=>
'<p class="margin-top-20">The ship set ground on the shore of this uncharted desert isle with gilligan the skipper too the millionaire and his wife.
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
    </div>',
            'metakey'=>'Software Application,Network Development, Training Center, Workshop Center', 
            'metadesc'=>'semua tentang ATC Art Techno Corporation', 
            'status' => 1,
            'order' => 4,
        ]);
    }

    public function safeDown()
    {
        $this->truncateTable('{{page_static}}');
    }
}
