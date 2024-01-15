<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oladb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $category = $price = $description = $delivery = $image = $review =   "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $postId = $_GET['id'];

    // Prepare and execute the SELECT query
    $sql = "SELECT * FROM product WHERE id = ?";
    $stmt = $conn->prepare($sql);
	
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("i", $postId);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result !== false) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = htmlspecialchars($row['name']);
                $category = htmlspecialchars($row['category']);
                $price = htmlspecialchars($row['price']);
                $description = htmlspecialchars($row['description']);
                $delivery = htmlspecialchars($row['delivery']);
                $review = htmlspecialchars($row['review']);
                $image = $row['image'];

              

                // Continue processing other variables...
            } else {
                // Post not found.
                $name = "Post not found for ID: " . $postId;
            }
        } else {
            // Error getting result set.
            $name = "Error getting result set: " . $conn->error;
        }
    } else {
        // Error executing query.
        $name = "Error executing query: " . $stmt->error;
    }

    $stmt->close();
}

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

<body> <b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<!--start top header wrapper-->
		<?php include_once('header.php'); ?>
		<!--end top header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">

							<?php if ($name !== "Post not found." && strpos($name, "Error executing query:") === false) : ?>
								<h3 class="breadcrumb-title pe-3"><?php echo $name; ?></h3>
								<div class="ms-auto">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0 p-0">
											<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
											</li>
											<li class="breadcrumb-item"><a href="javascript:;">Shop</a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">Product Details</li>
										</ol>
									</nav>
								</div>

						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start product detail-->
				<section class="py-4">
					<div class="container">
						<div class="product-detail-card">
							<div class="product-detail-body">
								<div class="row g-0">
									<div class="col-12 col-lg-5">
										<div class="image-zoom-section">
											<div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
												<div class="item">

													<?php
													// Folder where images will be saved
													$imageFolder =  "/olaproject/admin/assets/img/";


													if (!empty($row['image'])) {
														$imagePath = $imageFolder . $row['image'];
														echo "<p> <img src='" . $imagePath . "' alt='Image' class='img-fluid'></p>";
													} else {
														echo "<p>No image available</p>";
													}
													

													if ($result->num_rows > 0) {
														while ($row = $result->fetch_assoc()) {
															// Check if the image column is not empty
															$imagePath = '';
															if (!empty($row['image'])) {
																$imagePath = $imageFolder . $row['image'];

																echo "<p> <img src='" . $imagePath . "' alt='Image' class='img-fluid'></p>";
															} else {
																echo "<p>No image available</p>";
															}
														}
													} else {
														echo "No posts found.";
													}

													?>
												</div>

											</div>

										</div>
									</div>
									<div class="col-12 col-lg-7">
										<div class="product-info-section p-3">
											<h3 class="mt-3 mt-lg-0 mb-0"><?php echo $name; ?></h3>
											<div class="product-rating d-flex align-items-center mt-2">

											</div>
											<div class="d-flex align-items-center mt-3 gap-2">
												<h5 class="mb-0 text-decoration-line-through text-light-3"></h5>
												<h4 class="mb-0"><?php echo $price; ?></h4>
											</div>
											<div class="mt-3">
												<h6>Discription :</h6>
												<p class="mb-0"><?php echo $description; ?></p>
											</div>
											<dl class="row mt-3">
												<dt class="col-sm-3">Product id</dt>
												<dd class="col-sm-9"><?php echo $postId; ?></dd>
												<dt class="col-sm-3">Delivery</dt>
												<dd class="col-sm-9"><?php echo $delivery; ?></dd>
											</dl>

											<!--end row-->
											<div class="d-flex gap-2 mt-3">
												<a href="javascript:;" class="btn btn-white btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
											</div>
											<hr />
											<div class="product-sharing">
												<ul class="list-inline">
													<li class="list-inline-item"> <a href="javascript:;"><i class='bx bxl-facebook'></i></a>
													</li>
													<li class="list-inline-item"> <a href="javascript:;"><i class='bx bxl-linkedin'></i></a>
													</li>
													<li class="list-inline-item"> <a href="javascript:;"><i class='bx bxl-twitter'></i></a>
													</li>
													<li class="list-inline-item"> <a href="javascript:;"><i class='bx bxl-instagram'></i></a>
													</li>
													<li class="list-inline-item"> <a href="javascript:;"><i class='bx bxl-google'></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
					</div>
				</section>
			<?php else : ?>
				<p><?php echo $name; ?></p>
			<?php endif; ?>
			<!--end product detail-->
			<!--start product more info-->
			<section class="py-4">
				<div class="container">
					<div class="product-more-info">
						<ul class="nav nav-tabs mb-0" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-bs-toggle="tab" href="#discription" role="tab" aria-selected="true">
									<div class="d-flex align-items-center">
										<div class="tab-title text-uppercase fw-500">Description</div>
									</div>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#more-info" role="tab" aria-selected="false">
									<div class="d-flex align-items-center">
										<div class="tab-title text-uppercase fw-500">More Info</div>
									</div>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#tags" role="tab" aria-selected="false">
									<div class="d-flex align-items-center">
										<div class="tab-title text-uppercase fw-500">Tags</div>
									</div>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab" aria-selected="false">
									<div class="d-flex align-items-center">
										<div class="tab-title text-uppercase fw-500"></div>
									</div>
								</a>
							</li>
						</ul>
						<div class="tab-content pt-3">
							<div class="tab-pane fade show active" id="discription" role="tabpanel">


								<p class="mb-1"><?php echo $review; ?></p>

							</div>
							<div class="tab-pane fade" id="more-info" role="tabpanel">
								<p><?php echo $description; ?></p>
							</div>
							<div class="tab-pane fade" id="tags" role="tabpanel">
								<div class="tags-box"> <a href="javascript:;" class="tag-link">Financce</a>
									<a href="javascript:;" class="tag-link">Business & Money</a>
									<a href="javascript:;" class="tag-link">Romance</a>
									<a href="javascript:;" class="tag-link">Reference</a>
									<a href="javascript:;" class="tag-link">Self-Help</a>
									<a href="javascript:;" class="tag-link">Religion & Spirituality</a>
									<a href="javascript:;" class="tag-link">Suspence</a>
									<a href="javascript:;" class="tag-link">Sports & Outdoors</a>
									<a href="javascript:;" class="tag-link">Teen & Young Adult</a>
									<a href="javascript:;" class="tag-link">Travel</a>

								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!--end product more info-->
			<!--start similar products-->

			<?php include_once('similarproduct.php'); ?>


			<!--end similar products-->
			
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
	<script src="assets/js/product-details.js"></script>
</body>

</html>