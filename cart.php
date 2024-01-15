<?php
error_reporting(E_ALL);
session_start();

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    // Get the product ID from the URL
    $productId = $_GET['id'];

    // Perform additional validation and sanitation if needed

    // Check if the cart array is already set in the session
    if (!isset($_SESSION['cart'])) {
        // If not, initialize an empty cart array
        $_SESSION['cart'] = array();
    }

    // Add the product ID to the cart array
    $_SESSION['cart'][] = $productId;

    // Redirect the user back to the product page or any other page
    header('Location: product_details.php?id=' . $productId);
    exit();
} else {
    echo "Invalid product ID";

}

$productId = isset($_POST['id']) ? $_POST['id'] : null;

if ($productId) {
    // Product ID is valid, proceed with adding to the cart
    echo json_encode(['status' => 'success', 'message' => 'Product added to cart.']);
} else {
    // Invalid product ID
    echo json_encode(['status' => 'error', 'message' => 'Invalid product ID.']);
}

// addToCart.php

// Retrieve the product ID from the AJAX request
$productId = isset($_POST['id']) ? $_POST['id'] : null;

// Perform server-side logic (e.g., update session or database)

// Send a response back to the client (if needed)
echo json_encode(['status' => 'success', 'message' => 'Product added to cart.']);


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
		<?php require_once('header.php');?>
		<!--end top header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">Shop Cart</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Shop</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="py-4">
					<?php

					$select_cart = mysqli_query($conn, "SELECT * FROM `product`");
					$grand_total = 0;
					if (mysqli_num_rows($select_cart) > 0) {
						while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
					?>
							<div class="container">
								<div class="shop-cart">
									<div class="row">
										<div class="col-12 col-xl-8">
											<div class="shop-cart-list mb-3 p-3">
												<div class="row align-items-center g-3">
													<div class="col-12 col-lg-6">
														<div class="d-lg-flex align-items-center gap-2">
															<div class="cart-img text-center text-lg-start">
																<td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" width="130" alt=""></td>

															</div>
															<div class="cart-detail text-center text-lg-start">
																<?php echo $fetch_cart['name']; ?>
																$<?php echo number_format($fetch_cart['price']); ?>

																<form action="" method="post">
																	<input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
																	<input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>">
																	<input type="submit" value="update" name="update_update_btn">
																</form>

																$<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>
																<a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a>

														<?php
														$grand_total += $sub_total;
													};
												};
														?>



															</div>
														</div>
													</div>

													<div class="col-12 col-lg-3">
														<div class="text-center">
															<div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a href="javascript:;" class="btn btn-dark rounded-0 btn-ecomm"><i class='bx bx-x-circle'></i> Remove</a>
																<a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-heart me-0'></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="my-4 border-top"></div>
												<div class="d-lg-flex align-items-center gap-2"> <a href="index.php" class="btn btn-dark btn-ecomm"><i class='bx bx-shopping-bag'></i> Continue Shoping</a>
													<a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="btn btn-light btn-ecomm ms-auto"><i class='bx bx-x-circle'></i> Clear Cart</a>
													<a href="javascript:;" class="btn btn-white btn-ecomm"><i class='bx bx-refresh'></i> Update Cart</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-xl-4">
											<div class="checkout-form p-3 bg-light">
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
														<p class="fs-5">Estimate Shipping and Tax</p>
														<div class="my-3 border-top"></div>
														<div class="mb-3">
															<label class="form-label">Country Name</label>
															<select class="form-select rounded-0">
																<option selected>United States</option>
																<option value="1">Australia</option>
																<option value="2">India</option>
																<option value="3">Canada</option>
															</select>
														</div>
														<div class="mb-3">
															<label class="form-label">State/Province</label>
															<select class="form-select rounded-0">
																<option selected>California</option>
																<option value="1">Texas</option>
																<option value="2">Canada</option>
															</select>
														</div>
														<div class="mb-0">
															<label class="form-label">Zip/Postal Code</label>
															<input type="email" class="form-control rounded-0">
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
														<h5 class="mb-0">Order Total: <span class="float-end">$<?php echo $grand_total; ?></span></h5>
														<div class="my-4"></div>
														<div class="d-grid"> <a href="checkout-details.php" class="btn btn-dark btn-ecomm  <?= ($grand_total > 1) ? '' : 'disabled'; ?>">Proceed to Checkout</a>
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