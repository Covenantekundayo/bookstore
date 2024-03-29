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
							<h3 class="breadcrumb-title pe-3">Wishlist Grid</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Wishlist</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Wishlist</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start Featured product-->
				<section class="py-4">
					<div class="container">
						<div class="product-grid">
							<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
								<div class="col">
									<div class="card rounded-0 product-card">
										<a href="product-details.html">
											<img src="assets/images/products/01.png" class="card-img-top" alt="...">
										</a>
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price">	<span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto">	<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>	
														<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Remove From List</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card rounded-0 product-card">
										
										<a href="product-details.html">
											<img src="assets/images/products/02.png" class="card-img-top" alt="...">
										</a>
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-light-4"></i>
														<i class="bx bxs-star text-light-4"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>	
														<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Remove From List</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card rounded-0 product-card">
										
										<a href="product-details.html">
											<img src="assets/images/products/03.png" class="card-img-top" alt="...">
										</a>
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-light-4"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>	
														<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Remove From List</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card rounded-0 product-card">
										
										<a href="product-details.html">
											<img src="assets/images/products/04.png" class="card-img-top" alt="...">
										</a>
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>	
														<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Remove From List</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card rounded-0 product-card">
										
										<a href="product-details.html">
											<img src="assets/images/products/05.png" class="card-img-top" alt="...">
										</a>
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-light-4"></i>
														<i class="bx bxs-star text-light-4"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>	
														<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Remove From List</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card rounded-0 product-card">
										<a href="product-details.html">
											<img src="assets/images/products/06.png" class="card-img-top" alt="...">
										</a>
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>	
														<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Remove From List</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card rounded-0 product-card">
										<a href="product-details.html">
											<img src="assets/images/products/07.png" class="card-img-top" alt="...">
										</a>
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-light-4"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>	
														<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Remove From List</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card rounded-0 product-card">
										<a href="product-details.html">
											<img src="assets/images/products/08.png" class="card-img-top" alt="...">
										</a>
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="text-white fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto">
   													    <i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
														<i class="bx bxs-star text-warning"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>	
														<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-zoom-in'></i>Remove From List</a>
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
				<!--end Featured product-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
		<?php include_once('footer.php');?>
		<!--end footer section-->
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