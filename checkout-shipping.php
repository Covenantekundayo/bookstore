<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/img/logo.png" type="image/png">
	<!--plugins-->
	<link href="assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet">
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>A-One Bookshop</title>
</head>

<body>	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<!--start top header wrapper-->
		<?php include_once('header.php');?>
		<!--end top header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">Checkout</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Shop</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Checkout</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="py-4">
					<div class="container">
						<div class="shop-cart">
							<div class="row">
								<div class="col-12 col-xl-8">
									<div class="checkout-shipping">
										<div class="card bg-transparent rounded-0 shadow-none">
											<div class="card-body">
												<div class="steps steps-light">
													<a class="step-item active" href="shop-cart.html">
														<div class="step-progress"><span class="step-count">1</span>
														</div>
														<div class="step-label"><i class='bx bx-cart'></i>Cart</div>
													</a>
													<a class="step-item active" href="checkout-details.html">
														<div class="step-progress"><span class="step-count">2</span>
														</div>
														<div class="step-label"><i class='bx bx-user-circle'></i>Details</div>
													</a>
													<a class="step-item active current" href="checkout-shipping.html">
														<div class="step-progress"><span class="step-count">3</span>
														</div>
														<div class="step-label"><i class='bx bx-cube'></i>Shipping</div>
													</a>
													<a class="step-item" href="checkout-payment.html">
														<div class="step-progress"><span class="step-count">4</span>
														</div>
														<div class="step-label"><i class='bx bx-credit-card'></i>Payment</div>
													</a>
													<a class="step-item" href="checkout-review.html">
														<div class="step-progress"><span class="step-count">5</span>
														</div>
														<div class="step-label"><i class='bx bx-check-circle'></i>Review</div>
													</a>
												</div>
											</div>
										</div>
										<div class="card rounded-0 shadow-none">
											<div class="card-body">
												<h2 class="h5 mb-0">Choose Shipping Method</h2>
												<div class="my-3 border-bottom"></div>
												<div class="table-responsive">
													<table class="table">
														<thead class="table-light">
															<tr>
																<th>Method</th>
																<th>Time</th>
																<th>Fee</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Flat Rate</td>
																<td>2 days</td>
																<td>$10.00</td>
															</tr>
															<tr>
																<td>International shipping</td>
																<td>12 days</td>
																<td>$12.00</td>
															</tr>
															<tr>
																<td>Same day delivery</td>
																<td>1 day</td>
																<td>$22.00</td>
															</tr>
															<tr>
																<td>Expedited shipping</td>
																<td>--</td>
																<td>$15.00</td>
															</tr>
															<tr>
																<td>Local Pickup</td>
																<td>--</td>
																<td>$0.00</td>
															</tr>
															<tr>
																<td>UPS Ground</td>
																<td>2-5 days</td>
																<td>$16.00</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="card rounded-0 shadow-none">
											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="d-grid">	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-chevron-left"></i>Back to Details</a>
														</div>
													</div>
													<div class="col-md-6">
														<div class="d-grid">	<a href="javascript:;" class="btn btn-white btn-ecomm">Proceed to Payment<i class="bx bx-chevron-right"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-4">
									<div class="order-summary">
										<div class="card rounded-0">
											<div class="card-body">
												<div class="card rounded-0 border bg-transparent shadow-none">
													<div class="card-body">
														<p class="fs-5">Apply Discount Code</p>
														<div class="input-group">
															<input type="text" class="form-control rounded-0" placeholder="Enter discount code">
															<button class="btn btn-dark btn-ecomm" type="button">Apply Discount</button>
														</div>
													</div>
												</div>
												<div class="card rounded-0 border bg-transparent shadow-none">
													<div class="card-body">
														<p class="fs-5">Order summary</p>
														<div class="my-3 border-top"></div>
														<div class="d-flex align-items-center">
															<a class="d-block flex-shrink-0" href="javascript:;">
																<img src="assets/images/products/01.png" width="75" alt="Product">
															</a>
															<div class="ps-2">
																<h6 class="mb-1"><a href="javascript:;" class="text-dark">White Polo T-Shirt</a></h6>
																<div class="widget-product-meta"><span class="me-2">$19.<small>00</small></span><span class="">x 1</span>
																</div>
															</div>
														</div>
														<div class="my-3 border-top"></div>
														<div class="d-flex align-items-center">
															<a class="d-block flex-shrink-0" href="javascript:;">
																<img src="assets/images/products/17.png" width="75" alt="Product">
															</a>
															<div class="ps-2">
																<h6 class="mb-1"><a href="javascript:;" class="text-dark">Fancy Red Sneakers</a></h6>
																<div class="widget-product-meta"><span class="me-2">$16.<small>00</small></span><span class="">x 2</span>
																</div>
															</div>
														</div>
														<div class="my-3 border-top"></div>
														<div class="d-flex align-items-center">
															<a class="d-block flex-shrink-0" href="javascript:;">
																<img src="assets/images/products/04.png" width="75" alt="Product">
															</a>
															<div class="ps-2">
																<h6 class="mb-1"><a href="javascript:;" class="text-dark">Yellow Shine Blazer</a></h6>
																<div class="widget-product-meta"><span class="me-2">$22.<small>00</small></span><span class="">x 1</span>
																</div>
															</div>
														</div>
														<div class="my-3 border-top"></div>
														<div class="d-flex align-items-center">
															<a class="d-block flex-shrink-0" href="javascript:;">
																<img src="assets/images/products/09.png" width="75" alt="Product">
															</a>
															<div class="ps-2">
																<h6 class="mb-1"><a href="javascript:;" class="text-dark">Men Black Hat Cap</a></h6>
																<div class="widget-product-meta"><span class="me-2">$14.<small>00</small></span><span class="">x 1</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card rounded-0 border bg-transparent mb-0 shadow-none">
													<div class="card-body">
														<p class="mb-2">Subtotal: <span class="float-end">$198.00</span>
														</p>
														<p class="mb-2">Shipping: <span class="float-end">--</span>
														</p>
														<p class="mb-2">Taxes: <span class="float-end">$14.00</span>
														</p>
														<p class="mb-0">Discount: <span class="float-end">--</span>
														</p>
														<div class="my-3 border-top"></div>
														<h5 class="mb-0">Order Total: <span class="float-end">212.00</span></h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end row-->
						</div>
					</div>
				</section>
				<!--end shop cart-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
		<?php include_once('footer.php');?>
		<!--end footer section-->
		<!--start quick view product-->
		<!-- Modal -->
		
		<!--end quick view product-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->
	
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>