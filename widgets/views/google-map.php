

<div id="myMap" class="height-350"></div>

<?php
$this->registerJs('
            jQuery(document).ready(function () {
	jQuery(".materialize-slider").revolution({
		sliderType: "standard",
		sliderLayout: "fullscreen",
		delay: 9000,
		navigation: {
			keyboardNavigation: "off",
			keyboard_direction: "horizontal",
			mouseScrollNavigation: "off",
			onHoverStop: "off",
			arrows: {
				style: "hebe",
				enable: true,
				hide_onmobile: true,
				hide_under: 600,
				hide_onleave: true,
				hide_delay: 200,
				hide_delay_mobile: 1200,
				tmp: "<div class=\"tp-title-wrap\">    <div class=\"tp-arr-imgholder\"></div>    <div class=\"tp-arr-img-over\"></div> <span class=\"tp-arr-titleholder\">{{title}}</span> </div>",
				left: {
					h_align: "left",
					v_align: "center",
					h_offset: 30,
					v_offset: 0
				},
				right: {
					h_align: "right",
					v_align: "center",
					h_offset: 30,
					v_offset: 0
				}
			}
		},
		responsiveLevels: [1240, 1024, 778, 480],
		gridwidth: [1240, 1024, 778, 480],
		gridheight: [700, 600, 500, 500],
		parallax: {
			type: "mouse",
			origo: "slidercenter",
			speed: 2000,
			levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
		},
	});
});

');
