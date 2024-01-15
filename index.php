<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oladb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, price, category, image FROM product";
$result = $conn->query($sql);

$conn->close();
?>

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
		<div class="discount-alert d-none d-lg-block">
			<div class="alert alert-dismissible fade show shadow-none rounded-0 mb-0 border-bottom">
				<div class="d-lg-flex align-items-center gap-2 justify-content-center">
					<p class="mb-0">Get Up to <strong>40% OFF</strong> New-Season Offer</p>
					<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">On</a>
					<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">All Books
						Purchased</a>
					<p class="mb-0 font-13">Limited time only</p>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
		<!--start top header wrapper-->
		<?php include_once('header.php'); ?>
		<!--end top header wrapper-->
		<!--start slider section-->
		<section class="slider-section">
			<div class="first-slider">
				<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
					<ol class="carousel-indicators">
						<li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
						<li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
						<li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active bg-dark-gery">
							<div class="row d-flex align-items-center">
								<div class="col d-none d-lg-flex justify-content-center">
									<div class="">
										<h3 class="h3 fw-light">Has just arrived!</h3>
										<h1 class="h1">Huge Books Collection</h1>
										<p class="pb-3">Education, Finance, Health, &amp; much more...</p>
										<div class=""> <a class="btn btn-dark btn-ecomm" href="javascript:;">Shop Now <i class='bx bx-chevron-right'></i></a>
										</div>
									</div>
								</div>
								<div class="col">
									<img src="assets/img/front-view-books-with-white-background.jpg" class="img-fluid" alt="...">
								</div>
							</div>
						</div>
						<div class="carousel-item bg-dark-gery">
							<div class="row d-flex align-items-center">
								<div class="col d-none d-lg-flex justify-content-center">
									<div class="">
										<h3 class="h3 fw-light">Hurry up! Limited time offer for.</h3>
										<h1 class="h1">All Books Categorise</h1>
										<p class="pb-3">Education, Finance, Economics, Health &amp; much more...</p>
										<div class=""> <a class="btn btn-dark btn-ecomm" href="javascript:;">Shop Now <i class='bx bx-chevron-right'></i></a>
										</div>
									</div>
								</div>
								<div class="col">
									<img src="assets/img/front-view-books-with-white-background.jpg" class="img-fluid" alt="...">
								</div>
							</div>
						</div>
						<div class="carousel-item bg-dark-gery">
							<div class="row d-flex align-items-center">
								<div class="col d-none d-lg-flex justify-content-center">
									<div class="">
										<h3 class="h3 fw-light">Complete your look with</h3>
										<h1 class="h1">A-One Bookshop</h1>
										<p class="pb-3">Education &amp; Finance, Health, Economics &amp; much more...</p>
										<div class=""> <a class="btn btn-dark btn-ecomm" href="javascript:;">Shop Now <i class='bx bx-chevron-right'></i></a>
										</div>
									</div>
								</div>
								<div class="col">
									<img src="assets/img/front-view-books-with-white-background.jpg" class="img-fluid" alt="...">
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</a>
				</div>
			</div>
		</section>
		<!--end slider section-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start information-->
				<section class="py-3 border-top border-bottom">
					<div class="container">
						<div class="row row-cols-1 row-cols-lg-3 row-group align-items-center">
							<div class="col">
								<div class="d-flex align-items-center p-3 bg-white">
									<div class="fs-1"><i class='bx bx-taxi'></i>
									</div>
									<div class="info-box-content ps-3">
										<h6 class="mb-0">FREE SHIPPING &amp; RETURN</h6>
										<p class="mb-0">Free shipping on all orders over $49</p>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="d-flex align-items-center p-3 bg-white">
									<div class="fs-1"><i class='bx bx-dollar-circle'></i>
									</div>
									<div class="info-box-content ps-3">
										<h6 class="mb-0">MONEY BACK GUARANTEE</h6>
										<p class="mb-0">100% money back guarantee within 7 days of purchase</p>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="d-flex align-items-center p-3 bg-white">
									<div class="fs-1"><i class='bx bx-support'></i>
									</div>
									<div class="info-box-content ps-3">
										<h6 class="mb-0">ONLINE SUPPORT 24/7</h6>
										<p class="mb-0">Awesome Support for 24/7 Days</p>
									</div>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end information-->

				<!--start Featured product-->

				<section class="py-4">
					<div class="container">
						<div class="d-flex align-items-center">
							<h5 class="text-uppercase mb-0">FEATURED PRODUCTS</h5>
							<a href='javascript:;' class='btn btn-dark btn-ecomm ms-auto rounded-0'>More Products<i class='bx bx-chevron-right'></i></a>
						</div>
						<hr>

						<?php
						// Folder where images will be saved
						$imageFolder = "/olaproject/admin/assets/img/";

						if (!file_exists($imageFolder)) {
							mkdir($imageFolder, 0777, true);
						}

						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								echo '<div class="product-grid">';
								echo '<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">';
								echo '<div class="col">';

								echo "<div class='card rounded-0 product-card'>";
								echo '<div class="card-header bg-transparent border-bottom-0">';
								echo '	<div class="d-flex align-items-center justify-content-end gap-3">';

								echo '<a href="javascript:;">';

								echo "<div class='product-wishlist'><i class='bx bx-heart'>" . "</i>
													</div>";

								echo "</a>";
								echo '</div>';
								echo '</div>';
								echo "<a href=''>";
								// Check if the image column is not empty
								$imagePath = '';
								if (!empty($row['image'])) {
									$imagePath = $imageFolder . $row['image'];

									echo "<p> <img src='" . $imagePath . "' alt='Image' class='card-img-top'></p>";
								} else {
									echo "<p>No image available</p>";
								}
								echo "</a>";
								echo "<div class='card-body'>";
								echo "<div class='product-info'>";
								echo "<a href=''>";
								echo "<p class=' product-catergory font-13 mb-1'>  " . $row['category'] . "</p>";

								echo "</a>";
								echo "<a href=''>";
								echo "<h6 class=' product-name mb-2'> " . $row['name'] . "</h6>";

								echo "</a>";
								echo "<div class='d-flex align-items-center'>";
								echo "<div class='mb-1 product-price'>";
								echo "<span class='fs-5 '> # " . $row['price'] . "</span>";

								echo "</div>";

								echo "</div>";
								echo "<div class='product-action mt-2'>";
								echo "<div class='d-grid gap-2'>";
								echo "<div class='product-action mt-2'>";
								echo "<div class='d-grid gap-2'>";
								echo "<button class='btn btn-dark btn-ecomm add-to-cart' data-product-id='" . $row['id'] . "'>
											<i class='bx bxs-cart-add'></i> Add to Cart
									  </button>";
								echo "</div>";
								echo "</div>";



								echo "<a class='btn btn-light btn-ecomm'><a class='btn btn-light btn-ecomm'  href='product_details.php?id=" . $row['id'] . "'> <i
													class='bx bx-zoom-in'></i> Quick View"  . "</a></a>";

								echo "</div>";
								echo "</div>";
								echo "</div>";

								echo '</div>';
								echo '</div>';
								echo '</div>';

								echo "</div>";
							}
						} else {
							echo "No posts found.";
						}

						?>
					</div>

				</section>

				<!--end Featured product-->
				<!--start New Arrivals-->
				<section class="py-4">
					<div class="container">
						<div class="d-flex align-items-center">
							<h5 class="text-uppercase mb-0">Highly Rated</h5>
							<a href="javascript:;" class="btn btn-dark ms-auto rounded-0">View All<i class='bx bx-chevron-right'></i></a>
						</div>
						<hr />
						<?php include_once('similarproduct.php');?>
					</div>
				</section>
				<!--end New Arrivals-->


				<!--start support info-->
				<section class="py-4 bg-light">
					<div class="container">
						<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group">
							<div class="col">
								<div class="text-center">
									<div class="font-50"> <i class='bx bx-cart'></i>
									</div>
									<h2 class="fs-5 text-uppercase mb-0">Free delivery</h2>
									<p class="text-capitalize">Free delivery over $199</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
										magna, et dapib.</p>
								</div>
							</div>
							<div class="col">
								<div class="text-center">
									<div class="font-50"> <i class='bx bx-credit-card'></i>
									</div>
									<h2 class="fs-5 text-uppercase mb-0">Secure payment</h2>
									<p class="text-capitalize">We possess SSL / Secure сertificate</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
										magna, et dapib.</p>
								</div>
							</div>
							<div class="col">
								<div class="text-center">
									<div class="font-50"> <i class='bx bx-dollar-circle'></i>
									</div>
									<h2 class="fs-5 text-uppercase mb-0">Free returns</h2>
									<p class="text-capitalize">We return money within 30 days</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
										magna, et dapib.</p>
								</div>
							</div>
							<div class="col">
								<div class="text-center">
									<div class="font-50"> <i class='bx bx-support'></i>
									</div>
									<h2 class="fs-5 text-uppercase mb-0">Customer Support</h2>
									<p class="text-capitalize">Friendly 24/7 customer support</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
										magna, et dapib.</p>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end support info-->


				<!--start bottom products section-->
				<?php include_once('similarproduct.php');?>
				<!--end bottom products section-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
		<?php include_once('footer.php'); ?>
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
	<script src="assets/js/index.js"></script>
	



</body>

</html>