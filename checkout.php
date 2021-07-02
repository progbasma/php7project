<?php
include('includes/header.php');


?>
<!-- end header -->




<!-- start main content -->
<main class="main-container">
<!--Checkout Area Start-->
<section class="checkout-area area-padding ptb-40">
	<!-- Begin checkout -->
	<div class="ld-subpage-content">

		<div class="checkout-content">

			<!-- Begin checkout section -->
			<section class="checkout">



				<section class="checkout-section">

					<div class="ld-checkout-inner">

						<div class="xs-margin"></div>

						<div class="accordion" id="collapse">

							<div class="accordion-group panel">

								<div class="container">
									<h2 class="accordion-title">

                                            <span>1. Informations
                                            </span> <a class="accordion-btn open" data-toggle="collapse" href="#collapse-one"></a>
									</h2>

									<div class="accordion-body collapse in collapse-one" id="collapse-one">

										<div class="row accordion-body-wrapper">

											<div class="col-sm-6 padding-right-md">
												<h3 class="subtitle">new customer</h3>

												<p>Regiter with us for future convenience:</p>

												<form action="#">

													<div class="form-group custom-checkbox-wrapper">

                                                            <span class="custom-checkbox-container">
                                                                <input type="checkbox" name="guest" value="guest">

                                                                <span class="custom-checkbox-icon"></span>
                                                            </span>

														<span>Checkout as Guest</span>
													</div>

													<div class="form-group custom-checkbox-wrapper">

                                                            <span class="custom-checkbox-container">
                                                                <input type="checkbox" name="register" value="register">

                                                                <span class="custom-checkbox-icon"></span>
                                                            </span>

														<span>Register</span>
													</div>

													<div class="xs-margin">
													</div>

													<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track syour orders in your account and more.</p>

													<div class="xs-margin">
													</div>
													<input type="submit" class="btn btn-lg btn-custom min-width-sm" value="continue">
												</form>
											</div>

											<div class="md-margin visible-xs clearfix">
											</div>

											<div class="col-sm-6 padding-left-md">
												<h3 class="subtitle">Registered customer</h3>

												<p>If you have an account with us, please log in.</p>

												<div class="xss-margin">
												</div>

												<form action="#">

													<div class="form-group">
														<label for="email" class="form-label">Enter your e-mail

															<span class="required">*</span>
														</label>
														<input type="email" name="email" id="email" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="password" class="form-label">Enter your password

															<span class="required">*</span>
														</label>
														<input type="password" name="password" id="password" class="form-control input-lg" required>
													</div>

													<div class="top-5px">
													</div>

													<div class="form-group custom-checkbox-wrapper">

                                                            <span class="custom-checkbox-container">
                                                                <input type="checkbox" name="remember" value="remember">

                                                                <span class="custom-checkbox-icon"></span>
                                                            </span>

														<span>Remember Password</span>
													</div>

													<div class="xss-margin">
													</div>
													<input type="submit" class="btn btn-lg btn-custom min-width-sm" value="login">
												</form>
											</div>
										</div>

										<div class="lg-margin2x">
										</div>
									</div>
								</div>
							</div>

							<div class="accordion-group panel darkerbg">

								<div class="container">
									<h2 class="accordion-title">

                <span>2. Billing Informations
                </span> <a class="accordion-btn open" data-toggle="collapse" href="#collapse-two"></a></h2>

									<div class="accordion-body collapse in" id="collapse-two">

										<div class="row accordion-body-wrapper">

											<form action="#">

												<div class="col-sm-6 padding-right-md">
													<h3 class="subtitle">Your Personal Details</h3>

													<div class="xs-margin half">
													</div>

													<div class="form-group">
														<label for="firstname" class="form-label">Enter your first name

                                                                <span class="required">*
                </span>
														</label>
														<input type="text" name="firstname" id="firstname" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="lastname" class="form-label">Enter your last name

                                                                <span class="required">*
                </span>
														</label>
														<input type="text" name="lastname" id="lastname" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="email2" class="form-label">Enter your e-mail

                                                                <span class="required">*
                </span>
														</label>
														<input type="email" name="email2" id="email2" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="telephone" class="form-label">Enter your telephone

                                                                <span class="required">*
                </span>
														</label>
														<input type="text" name="telephone" id="telephone" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="fax" class="form-label">Enter your fax

                                                                <span class="required">*
                </span>
														</label>
														<input type="text" name="fax" id="fax" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="company" class="form-label">Enter your company

                                                                <span class="required">*
                </span>
														</label>
														<input type="text" name="company" id="company" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="password2" class="form-label">Enter your password

                                                                <span class="required">*
                </span>
														</label>
														<input type="password" name="password2" id="password2" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="password3" class="form-label">Enter your password

                                                                <span class="required">*
                </span>
														</label>
														<input type="password" name="password3" id="password3" class="form-control input-lg" required>
													</div>

													<div class="form-group custom-checkbox-wrapper">

                                                            <span class="custom-checkbox-container">
                <input type="checkbox" name="newsletter" value="newsletter">

                <span class="custom-checkbox-icon">
                </span>
                                                            </span>

                                                            <span>I wish to subscribe to the Vigo Shop newsletter.
                </span>
													</div>

													<div class="top-10px">
													</div>

													<div class="form-group custom-checkbox-wrapper">

                                                            <span class="custom-checkbox-container">
                <input type="checkbox" checked="checked" name="same" value="same">

                <span class="custom-checkbox-icon">
                </span>
                                                            </span>

                                                            <span>My delivery and billing addresses are the same.
                </span>
													</div>
												</div>

												<div class="md-margin visible-xs clearfix">
												</div>

												<div class="col-sm-6 padding-left-md">
													<h3 class="subtitle">Your Address</h3>

													<div class="xs-margin half">
													</div>

													<div class="form-group">
														<label for="address1" class="form-label">Enter your address 1
														</label>
														<input type="text" name="address1" id="address1" class="form-control input-lg">
													</div>

													<div class="form-group">
														<label for="address2" class="form-label">Enter your address 2
														</label>
														<input type="text" name="address2" id="address2" class="form-control input-lg">
													</div>

													<div class="form-group">
														<label for="city" class="form-label">Enter your city

                                                                <span class="required">*
                </span>
														</label>
														<input type="text" name="city" id="city" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="postcode" class="form-label">Enter your post code
														</label>
														<input type="text" name="postcode" id="postcode" class="form-control input-lg" required>
													</div>

													<div class="form-group">
														<label for="country" class="form-label">Enter your country

                                                                <span class="required">*
                </span>
														</label>

														<div class="large-selectbox clearfix">
															<select id="country" name="country" class="selectbox">

																<option value="">Usa</option>

																<option value="United Kingdom">United Kingdom</option>

																<option value="Brazil">Brazil</option>

																<option value="France">France</option>

																<option value="Italy">Italy</option>

																<option value="Spain">Spain</option>
															</select>
														</div>
													</div>

													<div class="form-group">
														<label for="region" class="form-label">Enter your region/state

                                                                <span class="required">*
                </span>
														</label>

														<div class="large-selectbox clearfix">
															<select id="region" name="region" class="selectbox">

																<option value="California">California</option>

																<option value="New York">New York</option>
															</select>
														</div>
													</div>

													<div class="top-5px">
													</div>

													<div class="form-group custom-checkbox-wrapper">

                                                            <span class="custom-checkbox-container">
                <input type="checkbox" name="privacy" value="privacy">

                <span class="custom-checkbox-icon">
                </span>
                                                            </span>

                                                            <span>I have reed and agree to the Privacy Policy.
                </span>
													</div>

													<div class="xs-margin">
													</div>
													<input type="submit" class="btn btn-custom btn-lg min-width-md" value="Continue">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="accordion-group panel">

								<div class="container">
									<h2 class="accordion-title">

                <span>3. Delivery Details
                </span> <a class="accordion-btn" data-toggle="collapse" href="#collapse-three"></a></h2>

									<div class="accordion-body collapse" id="collapse-three">

										<div class="row accordion-body-wrapper">

											<div class="col-md-12">

												<p>Delivery details here...</p>
											</div>
										</div>

										<div class="lg-margin2x">
										</div>
									</div>
								</div>
							</div>

							<div class="accordion-group panel">

								<div class="container">
									<h2 class="accordion-title">

                <span>4. Delivery Method
                </span> <a class="accordion-btn" data-toggle="collapse" href="#collapse-four"></a></h2>

									<div class="accordion-body collapse" id="collapse-four">

										<div class="row accordion-body-wrapper">

											<div class="col-md-12">

												<p>Delivery methods here...</p>
											</div>
										</div>

										<div class="lg-margin2x">
										</div>
									</div>
								</div>
							</div>

							<div class="accordion-group panel">

								<div class="container">
									<h2 class="accordion-title mb-0">

                <span>5. Confirm Order
                </span> <a class="accordion-btn open" data-toggle="collapse" href="#collapse-five"></a></h2>

									<div class="accordion-body collapse in" id="collapse-five">

										<div class="row accordion-body-wrapper">

											<div class="col-md-12">
												<table class="table checkout-table">
													<thead>
													<tr>
														<th class="table-title">Product Name
														</th>
														<th class="table-title">Product Code
														</th>
														<th class="table-title">Unit Price
														</th>
														<th class="table-title">Quantity
														</th>
														<th class="table-title">SubTotal
														</th>
														<th>

                                                                    <span class="close-button disabled">
                </span>
														</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td class="product-name-col">
															<figure>
																<a href="#"><img src="img/product/special-item-1.jpg" alt="White linen sheer dress"></a>
															</figure>
															<h3 class="product-name"><a href="#">White linen sheer dress</a></h3>
															<ul>
																<li>Color: White</li>
																<li>Size: SM</li>
															</ul>
														</td>
														<td class="product-code">MP125984154
														</td>
														<td class="product-price-col">

                                                                    <span class="product-price-special">$1175
                </span>
														</td>
														<td>

															<div class="custom-quantity-input">
																<input type="text" name="quantity" value="1">
															</div>
														</td>
														<td class="product-total-col">

                                                                    <span class="product-price-special">$1175
                </span>
														</td>
														<td>
															<a href="#" class="close-button"></a>
														</td>
													</tr>
													<tr>
														<td class="product-name-col">
															<figure>
																<a href="#"><img src="img/product/special-item-2.jpg" alt="Black lace open back dress"></a>
															</figure>
															<h3 class="product-name"><a href="#">Black lace open back dress</a></h3>
															<ul>
																<li>Color: Black</li>
																<li>Size: XL</li>
															</ul>
														</td>
														<td class="product-code">MP125984154
														</td>
														<td class="product-price-col">

                                                                    <span class="product-price-special">$1475
                </span>
														</td>
														<td>

															<div class="custom-quantity-input">
																<input type="text" name="quantity" value="1">
															</div>
														</td>
														<td class="product-total-col">

                                                                    <span class="product-price-special">$1475
                </span>
														</td>
														<td>
															<a href="#" class="close-button"></a>
														</td>
													</tr>
													<tr class="merged">
														<td class="checkout-table-title" colspan="4">

                                                                    <span>Subtotal:
                </span>
														</td>
														<td class="checkout-table-price" colspan="2">$737.00
														</td>
													</tr>
													<tr class="merged">
														<td class="checkout-table-title" colspan="4">

                                                                    <span>Shipping:
                </span>
														</td>
														<td class="checkout-table-price" colspan="2">$6.00
														</td>
													</tr>
													<tr class="merged">
														<td class="checkout-table-title" colspan="4">

                                                                    <span>Tax (5%):
                </span>
														</td>
														<td class="checkout-table-price" colspan="2">$37.00
														</td>
													</tr>
													</tbody>
													<tfoot>
													<tr>
														<td class="checkout-total-title" colspan="4">

                                                                    <span>TOTAL:
                </span>
														</td>
														<td class="checkout-total-price cart-total" colspan="2">$780.00
														</td>
													</tr>
													</tfoot>
												</table>

												<div class="md-margin half">
												</div>

												<div class="text-right"><a href="#" class="btn btn-custom-6 btn-lger min-width-slg">CONFIRM ORDER</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="xlg-margin">
						</div>

					</div>

				</section>


			</section>
			<!-- End checkout section -->


		</div>
		<!-- /.checkout-content -->
	</div>
	<!-- /.ld-subpage-content -->
	<!-- End checkout -->
</section>
<!--End of Checkout Area-->


</main>
<!-- end main content -->

<!-- start footer area -->
<?php

include('includes/footer.php');
?>
<!-- footer area end -->


<!-- All Script -->
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<!-- Scroll up js
============================================ -->
<script src="js/jquery.scrollUp.js"></script>
<script src="js/menu.js"></script>


<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.collapse.js"></script>
<script src="js/main.js"></script>
</body>


</html>