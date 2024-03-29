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
							<h3 class="breadcrumb-title pe-3">Shop Grid Right Sidebar</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Shop</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Shop Right Sidebar</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop area-->
				<section class="py-4">
					<div class="container">
						<div class="row">
							<div class="col-12 col-xl-3 order-2">
								<div class="btn-mobile-filter d-xl-none"><i class='bx bx-slider-alt'></i>
								</div>
								<div class="filter-sidebar d-none d-xl-flex">
									<div class="card rounded-0 w-100">
										<div class="card-body">
											<div class="align-items-center d-flex d-xl-none">
												<h6 class="text-uppercase mb-0">Filter</h6>
												<div class="btn-mobile-filter-close btn-close ms-auto cursor-pointer"></div>
											</div>
											<hr class="d-flex d-xl-none" />
											<div class="product-categories">
												<h6 class="text-uppercase mb-3">Categories</h6>
												<ul class="list-unstyled mb-0 categories-list">
													<li><a href="javascript:;"> <span
																class="float-end badge rounded-pill bg-primary">42</span></a>
													</li>
													<li><a href="javascript:;">Arts & Photography <span
																class="float-end badge rounded-pill bg-primary">32</span></a>
													</li>
													<li><a href="javascript:;">Business and Money <span
																class="float-end badge rounded-pill bg-primary">17</span></a>
													</li>
													<li><a href="javascript:;">Law <span
																class="float-end badge rounded-pill bg-primary">217</span></a>
													</li>
													<li><a href="javascript:;">History <span
																class="float-end badge rounded-pill bg-primary">28</span></a>
													</li>
													<li><a href="javascript:;">Medical Books <span
																class="float-end badge rounded-pill bg-primary">145</span></a>
													</li>
													<li><a href="javascript:;">Science & Math <span
																class="float-end badge rounded-pill bg-primary">15</span></a>
													</li>
													<li><a href="javascript:;">Children Books <span
																class="float-end badge rounded-pill bg-primary">8</span></a>
													</li>
												</ul>
											</div>
										
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-xl-9 order-1">
								<div class="product-wrapper">
									<div class="toolbox d-flex align-items-center mb-3 gap-2">
										<div class="d-flex flex-wrap flex-grow-1 gap-1">
											<div class="d-flex align-items-center flex-nowrap">
											
											</div>
										</div>
										<div class="d-flex flex-wrap">
											<div class="d-flex align-items-center flex-nowrap">
											
											</div>
										</div>
										<div>	<a href="shop-grid-right-sidebar.html" class="btn btn-white rounded-0"><i class='bx bxs-grid me-0'></i></a>
										</div>
										<div>	<a href="shop-list-right-sidebar.html" class="btn btn-light rounded-0"><i class='bx bx-list-ul me-0'></i></a>
										</div>
									</div>
									<div class="product-grid">
										<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div
															class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-compare"><span><i
																			class="bx bx-git-compare"></i>
																		Compare</span>
																</div>
															</a>
															<a href="javascript:;">
																<div class="product-wishlist"> <i
																		class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="assets/img/book1.jpg" class="card-img-top"
														alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name
																</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price"> <span
																		class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
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
																	<a href="javascript:;"
																		class="btn btn-dark btn-ecomm"> <i
																			class="bx bxs-cart-add"></i>Add to Cart</a>
																	<a href="javascript:;"
																		class="btn btn-light btn-ecomm"
																		data-bs-toggle="modal"
																		data-bs-target="#QuickViewProduct"><i
																			class="bx bx-zoom-in"></i>Quick View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div
															class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-compare"><span><i
																			class="bx bx-git-compare"></i>
																		Compare</span>
																</div>
															</a>
															<a href="javascript:;">
																<div class="product-wishlist"> <i
																		class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="assets/img/book10.jpg" class="card-img-top"
														alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name
																</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price"> <span
																		class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
																</div>
																<div class="cursor-pointer ms-auto"> <i
																		class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-light-4"></i>
																	<i class="bx bxs-star text-light-4"></i>
																</div>
															</div>
															<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="javascript:;"
																		class="btn btn-dark btn-ecomm"> <i
																			class="bx bxs-cart-add"></i>Add to Cart</a>
																	<a href="javascript:;"
																		class="btn btn-light btn-ecomm"
																		data-bs-toggle="modal"
																		data-bs-target="#QuickViewProduct"><i
																			class="bx bx-zoom-in"></i>Quick View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div
															class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-compare"><span><i
																			class="bx bx-git-compare"></i>
																		Compare</span>
																</div>
															</a>
															<a href="javascript:;">
																<div class="product-wishlist"> <i
																		class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="assets/img/book11.jpg" class="card-img-top"
														alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name
																</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price"> <span
																		class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
																</div>
																<div class="cursor-pointer ms-auto"> <i
																		class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-light-4"></i>
																</div>
															</div>
															<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="javascript:;"
																		class="btn btn-dark btn-ecomm"> <i
																			class="bx bxs-cart-add"></i>Add to Cart</a>
																	<a href="javascript:;"
																		class="btn btn-light btn-ecomm"
																		data-bs-toggle="modal"
																		data-bs-target="#QuickViewProduct"><i
																			class="bx bx-zoom-in"></i>Quick View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div
															class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-compare"><span><i
																			class="bx bx-git-compare"></i>
																		Compare</span>
																</div>
															</a>
															<a href="javascript:;">
																<div class="product-wishlist"> <i
																		class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="assets/img/book12.jpg" class="card-img-top"
														alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name
																</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price"> <span
																		class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
																</div>
																<div class="cursor-pointer ms-auto"> <i
																		class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																</div>
															</div>
															<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="javascript:;"
																		class="btn btn-dark btn-ecomm"> <i
																			class="bx bxs-cart-add"></i>Add to Cart</a>
																	<a href="javascript:;"
																		class="btn btn-light btn-ecomm"
																		data-bs-toggle="modal"
																		data-bs-target="#QuickViewProduct"><i
																			class="bx bx-zoom-in"></i>Quick View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div
															class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-compare"><span><i
																			class="bx bx-git-compare"></i>
																		Compare</span>
																</div>
															</a>
															<a href="javascript:;">
																<div class="product-wishlist"> <i
																		class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="assets/img/book11.jpg" class="card-img-top"
														alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name
																</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price"> <span
																		class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
																</div>
																<div class="cursor-pointer ms-auto"> <i
																		class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-light-4"></i>
																	<i class="bx bxs-star text-light-4"></i>
																</div>
															</div>
															<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="javascript:;"
																		class="btn btn-dark btn-ecomm"> <i
																			class="bx bxs-cart-add"></i>Add to Cart</a>
																	<a href="javascript:;"
																		class="btn btn-light btn-ecomm"
																		data-bs-toggle="modal"
																		data-bs-target="#QuickViewProduct"><i
																			class="bx bx-zoom-in"></i>Quick View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div
															class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-compare"><span><i
																			class="bx bx-git-compare"></i>
																		Compare</span>
																</div>
															</a>
															<a href="javascript:;">
																<div class="product-wishlist"> <i
																		class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="assets/img/book14.jpg" class="card-img-top"
														alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name
																</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price"> <span
																		class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
																</div>
																<div class="cursor-pointer ms-auto"> <i
																		class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																</div>
															</div>
															<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="javascript:;"
																		class="btn btn-dark btn-ecomm"> <i
																			class="bx bxs-cart-add"></i>Add to Cart</a>
																	<a href="javascript:;"
																		class="btn btn-light btn-ecomm"
																		data-bs-toggle="modal"
																		data-bs-target="#QuickViewProduct"><i
																			class="bx bx-zoom-in"></i>Quick View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div
															class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-compare"><span><i
																			class="bx bx-git-compare"></i>
																		Compare</span>
																</div>
															</a>
															<a href="javascript:;">
																<div class="product-wishlist"> <i
																		class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="assets/img/book3.jpg" class="card-img-top"
														alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name
																</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price"> <span
																		class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
																</div>
																<div class="cursor-pointer ms-auto"> <i
																		class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-light-4"></i>
																</div>
															</div>
															<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="javascript:;"
																		class="btn btn-dark btn-ecomm"> <i
																			class="bx bxs-cart-add"></i>Add to Cart</a>
																	<a href="javascript:;"
																		class="btn btn-light btn-ecomm"
																		data-bs-toggle="modal"
																		data-bs-target="#QuickViewProduct"><i
																			class="bx bx-zoom-in"></i>Quick View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div
															class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-compare"><span><i
																			class="bx bx-git-compare"></i>
																		Compare</span>
																</div>
															</a>
															<a href="javascript:;">
																<div class="product-wishlist"> <i
																		class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="assets/img/book4.jpg" class="card-img-top"
														alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name
																</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price"> <span
																		class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
																</div>
																<div class="cursor-pointer ms-auto"> <i
																		class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																</div>
															</div>
															<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="javascript:;"
																		class="btn btn-dark btn-ecomm"> <i
																			class="bx bxs-cart-add"></i>Add to Cart</a>
																	<a href="javascript:;"
																		class="btn btn-light btn-ecomm"
																		data-bs-toggle="modal"
																		data-bs-target="#QuickViewProduct"><i
																			class="bx bx-zoom-in"></i>Quick View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div
															class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-compare"><span><i
																			class="bx bx-git-compare"></i>
																		Compare</span>
																</div>
															</a>
															<a href="javascript:;">
																<div class="product-wishlist"> <i
																		class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="assets/img/book5.jpg" class="card-img-top"
														alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name
																</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price"> <span
																		class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
																</div>
																<div class="cursor-pointer ms-auto"> <i
																		class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																</div>
															</div>
															<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="javascript:;"
																		class="btn btn-dark btn-ecomm"> <i
																			class="bx bxs-cart-add"></i>Add to Cart</a>
																	<a href="javascript:;"
																		class="btn btn-light btn-ecomm"
																		data-bs-toggle="modal"
																		data-bs-target="#QuickViewProduct"><i
																			class="bx bx-zoom-in"></i>Quick View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end row-->
									</div>
									<hr>
									<nav class="d-flex justify-content-between" aria-label="Page navigation">
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="javascript:;"><i class='bx bx-chevron-left'></i> Prev</a>
											</li>
										</ul>
										<ul class="pagination">
											<li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">2</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">3</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">4</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">5</a>
											</li>
										</ul>
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="javascript:;" aria-label="Next">Next <i class='bx bx-chevron-right'></i></a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end shop area-->
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
	<script src="assets/plugins/nouislider/nouislider.min.js"></script>
	<script src="assets/js/price-slider.js"></script>
	<script src="assets/js/product-gallery.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>