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
<body>

	<b class="screen-overlay"></b>

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
						<h3 class="breadcrumb-title pe-3">Reset Password</h3>
						<div class="ms-auto">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
									</li>
									<li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Reset Password</li>
								</ol>
							</nav>
						</div>
					</div>
					</div>
				</section>
               <!--end breadcrumb-->  

			   <!--start shop cart-->
				<section class="">
					<div class="container">
						<div class="authentication-reset-password d-flex align-items-center justify-content-center">
							<div class="row">
								<div class="col-12 col-lg-10 mx-auto">
									<div class="card">
										<div class="row g-0">
											<div class="col-lg-5 border-end">
												<div class="card-body">
													<div class="p-5">
														<h4 class="font-weight-bold">Genrate New Password</h4>
														<p class="">We received your reset password request. Please enter your new password!</p>
														<div class="mb-3 mt-5">
															<label class="form-label">New Password</label>
															<input type="text" class="form-control" placeholder="Enter new password" />
														</div>
														<div class="mb-3">
															<label class="form-label">Confirm Password</label>
															<input type="text" class="form-control" placeholder="Confirm password" />
														</div>
														<div class="d-grid gap-2">
															<button type="button" class="btn btn-dark">Change Password</button> <a href="authentication-login.html" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-7">
												<img src="assets/images/login-images/forgot-password-frent-img.jpg" class="card-img login-img h-100" alt="...">
											</div>
										</div>
									</div>
								</div>
							</div>
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


		<!--Start Back To Top Button-->
		 <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
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