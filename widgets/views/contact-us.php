<?php

$this->registerJsFile('http://maps.google.com/maps/api/js');
$this->registerJsFile('themes/v1/js/gmaps.min.js');
$this->registerJs("
    
var map = new GMaps({
	el: '.ourmap-single',
	lat: -12.043333,
	lng: -77.028333,
	scrollwheel: false,
	zoom: 15,
	zoomControl: true,
	panControl: false,
	streetViewControl: false,
	mapTypeControl: false,
	overviewMapControl: false,
	clickable: false,
	styles: [{'stylers': [{'hue': '#000'}, {saturation: -200},
				{gamma: 0.50}]}]
});
map.addMarker({
	lat: -12.043333,
	lng: -77.028333
});

", \yii\web\View::POS_END, 'google-maps');

?>

<!-- contact us section -->
<section id="contactus" class="contactus">
    <div class="container">
        <div class="row">
            <div class="main_contactus_area margin-top-120">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="head_title text-uppercase text-center">
                        <h2>Send Your Message</h2>
                        <p>We feel happy to see You</p>
                    </div>
                </div>

                <div class="main_contactus_content">
                    <div class="col-sm-10 col-sm-offset-1">
                        <form class="" action="http://demo.xpeedstudio.com/html/thulliyam/demo/subcribe.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group"> 
                                        <input id="first_name" name="first_name" type="text" placeholder="First Name*" class="form-control input-lg" required="">
                                    </div>
                                    <div class="form-group">  
                                        <input id="email" name="email" type="text" placeholder="E-mail*" class="form-control input-lg">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">  
                                        <input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control input-lg" required="">
                                    </div>

                                    <div class="form-group">  
                                        <input id="phone" name="phone" type="text" placeholder="Contact Number" class="form-control input-lg">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">  
                                        <textarea class="form-control" rows="6" placeholder="Message (If any)"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary hvr-bounce-to-bottom">Send Message</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div><!-- End off row -->
    </div><!-- End off container -->
</section><!-- End off Contact us section-->

<!-- map section-->
<div id="map" class="map margin-top-80">
    <div class="ourmap-single"></div>
</div><!-- End off Map section-->