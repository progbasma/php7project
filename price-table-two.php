<?php
include('includes/header.php');


?>
<!-- end header -->

<!-- start main content -->
<main class="main-container ptb-40">

	<!-- Start Pricing Tables -->

	<!--Section content-->
	<div id="Pricing" class="light-wrapper">
		<!--Container-->
		<div class="container inner-page">
			<!--Plans inner-->
			<div class="pricing">

				<div class="row">
					<div class="col-sm-3 col-md-3">
						<div class="card pricing-col">
							<div class="pricing-header">
								<div class="pricing-title">BASIC CARE</div>
								<!-- /.pricing-title -->
								<div class="pricing-value">$19</div>
								<!-- /.pricing-value -->
								<div class="pricing-duration">per month</div>
								<!-- /.pricing-duration -->

								<a href="#" class="btn">CHOSE PLAN</a>
							</div>
							<!-- /.pricing-header -->

							<div class="pricing-content">
								<ul>
									<li>1 Sed ut perspiciatis</li>
									<li>1 Neque porro</li>
									<li>20% off Quis autem vel eum</li>
									<li>without Temporibus autem</li>
									<li>1 Nam libero</li>
									<li>2 dolore magnam</li>
								</ul>
							</div>
							<!-- /.pricing-content -->
						</div>
						<!-- /.pricing-col-->
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="card pricing-col">
							<div class="pricing-header">
								<div class="pricing-title">CARE PLUS</div>
								<!-- /.pricing-title -->
								<div class="pricing-value">$49</div>
								<!-- /.pricing-value -->
								<div class="pricing-duration">per month</div>
								<!-- /.pricing-duration -->

								<a href="#" class="btn">CHOSE PLAN</a>
							</div>
							<!-- /.pricing-header -->

							<div class="pricing-content">
								<ul>
									<li>2 Sed ut perspiciatis</li>
									<li>3 Neque porro</li>
									<li>40% off Quis autem vel eum</li>
									<li>24h Temporibus autem</li>
									<li>2 Nam libero</li>
									<li>2 Nam libero</li>
								</ul>
							</div>
							<!-- /.pricing-content -->
						</div>
						<!-- /.pricing-col-->
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="card pricing-col popular">
							<div class="pricing-header">
								<div class="pricing-title">GOLD CARE</div>
								<!-- /.pricing-title -->
								<div class="pricing-value">$99</div>
								<!-- /.pricing-value -->
								<div class="pricing-duration">per month</div>
								<!-- /.pricing-duration -->

								<a href="#" class="btn">CHOSE PLAN</a>
							</div>
							<!-- /.pricing-header -->

							<div class="pricing-content">
								<ul>
									<li>unlimited Sed ut perspiciatis</li>
									<li>5 Neque porro</li>
									<li>275% off Quis autem vel eum</li>
									<li>24h Temporibus autem</li>
									<li>3 Nam libero</li>
									<li>5 dolore magnam</li>
								</ul>
							</div>
							<!-- /.pricing-content -->
						</div>
						<!-- /.pricing-col-->
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="card pricing-col">
							<div class="pricing-header">
								<div class="pricing-title">PLATINUM CARE</div>
								<!-- /.pricing-title -->
								<div class="pricing-value">$149</div>
								<!-- /.pricing-value -->
								<div class="pricing-duration">per month</div>
								<!-- /.pricing-duration -->

								<a href="#" class="btn">CHOSE PLAN</a>
							</div>
							<!-- /.pricing-header -->

							<div class="pricing-content">
								<ul>
									<li>unlimited Sed ut perspiciatis</li>
									<li>unlimited Neque porro</li>
									<li>free Quis autem vel eum</li>
									<li>24h Temporibus autem</li>
									<li>5 Nam libero</li>
									<li>unlimited dolore magnam</li>
								</ul>
							</div>
							<!-- /.pricing-content -->
						</div>
						<!-- /.pricing-col-->
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.pricing -->
			<!--End plans inner-->
		</div>
		<!--End container-->
	</div>
	<!--End section content -->

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