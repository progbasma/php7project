<?php
include('includes/header.php');


?>

<!-- end header -->

<!-- start main content -->
<main class="main-container ptb-40">

	<!-- Start Pricing Tables -->

	<!-- Start Medical plan -->
	<div class="container  inner-page">
		<div id="medical-plans">

			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="pricing-table">
						<div class="igl-background-fixed-img pricing-table-bg"></div>
						<ul class="pricing-table-box">
							<li class="pricing-product"><i>$</i>19<i>/m</i></li>
							<li class="price-title">BASIC CARE</li>
							<li class="options">1 For further</li>
							<li class="options"> who has any 20% off</li>
							<li class="options"> without time</li>
							<li class="options">1 Free</li>
							<li class="options">2 great pain</li>
							<li class="signup"><a href="#" title="" class="btn btn-custom-6">SIGN UP</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="pricing-table">
						<div class="igl-background-fixed-img pricing-table-bg"></div>
						<ul class="pricing-table-box">
							<li class="pricing-product"><i>$</i>49<i>/m</i></li>
							<li class="price-title">CARE PLUS</li>
							<li class="options">2 For further</li>
							<li class="options"> who has any 40% off</li>
							<li class="options"> without time</li>
							<li class="options">3 Free</li>
							<li class="options">2 great pain</li>
							<li class="signup"><a href="#" title="" class="btn btn-custom-6">SIGN UP</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="pricing-table">
						<div class="igl-background-fixed-img pricing-table-bg"></div>
						<ul class="pricing-table-box">
							<li class="pricing-product"><i>$</i>99<i>/m</i></li>
							<li class="price-title">GOLD CARE</li>
							<li class="options">that encounter Unlimited</li>
							<li class="options"> who has any 75% off</li>
							<li class="options"> in 24h</li>
							<li class="options">3 Free</li>
							<li class="options">5 great pain</li>
							<li class="signup"><a href="#" title="" class="btn btn-custom-6">SIGN UP</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="pricing-table">
						<div class="igl-background-fixed-img pricing-table-bg"></div>
						<ul class="pricing-table-box">
							<li class="pricing-product"><i>$</i>149<i>/m</i></li>
							<li class="price-title">PLATINUM CARE</li>
							<li class="options">that encounter Unlimited</li>
							<li class="options"> Unlimited never played</li>
							<li class="options"> in 24h</li>
							<li class="options">who has any free</li>
							<li class="options">5 great pain</li>
							<li class="signup"><a href="#" title="" class="btn btn-custom-6">SIGN UP</a></li>
						</ul>
					</div>
				</div>
			</div>


		</div>
	</div>

	<!-- End Medical plan -->

	<!-- End Pricing Tables -->

</main>
<!-- end main content -->



<!-- start footer area -->
<?php

include('includes/footer.php');
?>
<!-- footer area end -->


<!-- All script -->
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<!-- Scroll up js
============================================ -->
<script src="js/jquery.scrollUp.js"></script>
<script src="js/menu.js"></script>
<!-- new collection section script -->
<script src="js/swiper/idangerous.swiper.min.js"></script>
<script src="js/swiper/swiper.custom.js"></script>

<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.countdown.min.js"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>



<script type="text/javascript">

	/*-----------------------------------------------------------------------------------*/
	/* Product Carousel
	 /*-----------------------------------------------------------------------------------*/
	if (jQuery().owlCarousel) {
		var productCarousel = $("#product-carousel");
		productCarousel.owlCarousel({
			loop: true,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				900: {
					items: 3
				},
				1100: {
					items: 4
				}
			}
		});

		// Custom Navigation Events
		$(".product-control-nav .next").on("click", function() {
			productCarousel.trigger('next.owl.carousel');
		});

		$(".product-control-nav .prev").on("click", function() {
			productCarousel.trigger('prev.owl.carousel');
		});
	}

	/* Main Slider */
	$('.tp-banner0').show().revolution({
		dottedOverlay: "none",
		delay: 5000,
		startWithSlide: 0,
		startwidth: 869,
		startheight: 520,
		hideThumbs: 10,
		hideTimerBar: "on",
		thumbWidth: 50,
		thumbHeight: 50,
		thumbAmount: 4,
		navigationType: "bullet",
		navigationArrows: "solo",
		navigationStyle: "round",
		touchenabled: "on",
		onHoverStop: "on",
		swipe_velocity: 0.7,
		swipe_min_touches: 1,
		swipe_max_touches: 1,
		drag_block_vertical: false,
		parallax: "mouse",
		parallaxBgFreeze: "on",
		parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
		keyboardNavigation: "off",
		navigationHAlign: "right",
		navigationVAlign: "bottom",
		navigationHOffset: 30,
		navigationVOffset: 30,
		soloArrowLeftHalign: "left",
		soloArrowLeftValign: "center",
		soloArrowLeftHOffset: 50,
		soloArrowLeftVOffset: 8,
		soloArrowRightHalign: "right",
		soloArrowRightValign: "center",
		soloArrowRightHOffset: 50,
		soloArrowRightVOffset: 8,
		shadow: 0,
		fullWidth: "on",
		fullScreen: "off",
		spinner: "spinner4",
		stopLoop: "on",
		stopAfterLoops: -1,
		stopAtSlide: -1,
		shuffle: "off",
		autoHeight: "off",
		forceFullWidth: "off",
		hideThumbsOnMobile: "off",
		hideNavDelayOnMobile: 1500,
		hideBulletsOnMobile: "off",
		hideArrowsOnMobile: "off",
		hideThumbsUnderResolution: 0,
		hideSliderAtLimit: 0,
		hideCaptionAtLimit: 500,
		hideAllCaptionAtLilmit: 500,
		videoJsPath: "rs-plugin/videojs/",
		fullScreenOffsetContainer: ""
	});



</script>


</body>


</html>