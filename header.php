<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


// Include your database connection file
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oladb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Check if the cart array is set in the session
$cartCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

?>

<!-- Display the number of products in the cart -->


<div class="header-wrapper">
	<div class="top-menu border-bottom">
		<div class="container">
			<nav class="navbar navbar-expand">
				<div class="shiping-title text-uppercase font-13 d-none d-sm-flex">Welcome to our book store!
				</div>
				<ul class="navbar-nav ms-auto d-none d-lg-flex">
					<li class="nav-item"> <a class="nav-link" href="order-tracking.php">Track Order</a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="about-us.php">About</a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="shop-categories.php">Our Stores</a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="blog.php">Blog</a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact</a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="javascript:;">Help & FAQs</a>
					</li>
				</ul>

				<ul class="navbar-nav social-link ms-lg-2 ms-auto">
					<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-facebook'></i></a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-twitter'></i></a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-linkedin'></i></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="header-content pb-3 pb-md-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-4 col-md-auto">
					<div class="d-flex align-items-center">
						<div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i class='bx bx-menu'></i>
						</div>
						<div class="logo d-none d-lg-flex">
							<a href="index.html">
								<img src="assets/img/logo.jpg" class="logo-icon" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="col col-md order-4 order-md-2">
					<div class="input-group flex-nowrap px-xl-4">
						<input type="text" class="form-control w-100" placeholder="Search for Products">
						<span class="input-group-text cursor-pointer bg-transparent"><i class='bx bx-search'></i></span>
					</div>
				</div>
				<div class="col-4 col-md-auto order-3 d-none d-xl-flex align-items-center">
					<div class="fs-1 text-white"><i class='bx bx-headphone'></i>
					</div>
					<div class="ms-2">
						<p class="mb-0 font-13">CALL US NOW</p>
						<h5 class="mb-0">+234 9049082096</h5>
					</div>
				</div>
				<div class="col-4 col-md-auto order-2 order-md-4">
					<div class="top-cart-icons float-end">
						<nav class="navbar navbar-expand">
							<ul class="navbar-nav ms-auto">
								<li class="nav-item"><a href="account-dashboard.html" class="nav-link cart-link"><i class='bx bx-user'></i></a>
								</li>
								<li class="nav-item"><a href="wishlist.html" class="nav-link cart-link"><i class='bx bx-heart'></i></a>
								</li>
								<li class="nav-item dropdown dropdown-large">
									<a href="#" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link" data-bs-toggle="dropdown"> <span class="alert-count"><?php echo $cartCount; ?></span>
										<i class='bx bx-shopping-bag'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="cart.php">
											<div class="cart-header">
												<p class="cart-header-title mb-0"><?php echo $cartCount; ?></p>
												<p class="cart-header-clear ms-auto mb-0">VIEW CART</p>
											</div>
										</a>
										<?php
										// Check if the cart array is set in the session
										if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
											// Retrieve product details from the database based on the IDs in the cart
											$productIds = implode(',', $_SESSION['cart']);
											$sql = "SELECT * FROM products WHERE id IN ($productIds)";
											$result = $conn->query($sql);

											// Initialize total price
											$totalPrice = 0;

											// Display cart summary and product details
											while ($row = $result->fetch_assoc()) {

												echo '<div class="cart-list">';
												echo '<a class="dropdown-item" href="javascript:;">';
												echo '<div class="d-flex align-items-center">';
												echo '<div class="flex-grow-1">';
												echo "<h6 class='cart-product-title'>{$row['name']}</h6>";

												echo "<p class='cart-product-price'> # {$row['price']}</p>";
												echo '</div>';
												echo '<div class="position-relative">';
												echo "<div class='cart-product-cancel position-absolute'><i class='bx bx-x'>" . "</i>
																</div>";
												echo '<div class="cart-product">';
												echo "<img src='product_images/{$row['image']}' alt='Product Image' >";
												echo '</div>';
												echo '</div>';
												echo '</div>';
												echo '</a>';


												echo '</div>';
												echo '<a href="javascript:;">';
												echo '<div class="text-center cart-footer d-flex align-items-center">';
												// Add the product price to the total
												$totalPrice += $row['price'];
											}
											echo '<h5 class="mb-0">TOTAL</h5>';

											// Display total price
											echo "<h5 class='mb-0 ms-auto'> # {$totalPrice}</h5>";

											echo '</div>';
											echo '	</a>';
											echo '<div class="d-grid p-3 border-top"> <a href="checkout.php" class="btn btn-dark btn-ecomm">CHECKOUT</a>
												</div>';
										} else {
											echo "Your cart is empty.";
										}
										?>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!--end row-->
		</div>
	</div>
	<div class="primary-menu border-top">
		<div class="container">
			<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
				<div class="offcanvas-header">
					<button class="btn-close float-end"></button>
					<h5 class="py-2">Navigation</h5>
				</div>
				<ul class="navbar-nav">
					<li class="nav-item active"> <a class="nav-link" href="index.php">Home </a>
					</li>
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">Categories <i class='bx bx-chevron-down'></i></a>
						<div class="dropdown-menu dropdown-large-menu">
							<div class="row">
								<div class="col-md-4">
									<h6 class="large-menu-title">Books</h6>
									<ul class="">
										<li><a href="#">Finance</a>
										</li>
										<li><a href="#">Health</a>
										</li>
										<li><a href="#">Economics</a>
										</li>
										<li><a href="#">Insurance</a>
										</li>
										<li><a href="#">Entreprenurship</a>
										</li>
										<li><a href="#">Education</a>
										</li>

									</ul>
								</div>
								<!-- end col-3 -->

								<!-- end col-3 -->

								<!-- end col-3 -->
							</div>
							<!-- end row -->
						</div>
						<!-- dropdown-large.// -->
					</li>
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">Shop <i class='bx bx-chevron-down'></i></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Shop
									Layouts <i class='bx bx-chevron-right float-end'></i></a>
								<ul class="submenu dropdown-menu">
									<li><a class="dropdown-item" href="shop-grid-left-sidebar.php">Shop Grid -
											Left Sidebar</a>
									</li>
									<li><a class="dropdown-item" href="shop-grid-right-sidebar.php">Shop Grid -
											Right Sidebar</a>
									</li>
									<li><a class="dropdown-item" href="shop-list-left-sidebar.php">Shop List -
											Left Sidebar</a>
									</li>
									<li><a class="dropdown-item" href="shop-list-right-sidebar.php">Shop List -
											Right Sidebar</a>
									</li>
									<li><a class="dropdown-item" href="shop-grid-filter-on-top.php">Shop Grid -
											Top Filter</a>
									</li>
									<li><a class="dropdown-item" href="shop-list-filter-on-top.php">Shop List -
											Top Filter</a>
									</li>
								</ul>
							</li>
							<li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Shop
									Pages <i class='bx bx-chevron-right float-end'></i></a>
								<ul class="submenu dropdown-menu">
									<li><a class="dropdown-item" href="shop-cart.php">Shop Cart</a>
									</li>

									<li><a class="dropdown-item" href="checkout-details.php">Checkout
											Details</a>
									</li>
									<li><a class="dropdown-item" href="checkout-shipping.php">Checkout
											Shipping</a>
									</li>
									<li><a class="dropdown-item" href="checkout-payment.php">Checkout
											Payment</a>
									</li>
									<li><a class="dropdown-item" href="checkout-review.php">Checkout Review</a>
									</li>
									<li><a class="dropdown-item" href="checkout-complete.php">Checkout
											Complete</a>
									</li>
									<li><a class="dropdown-item" href="order-tracking.php">Order Tracking</a>
									</li>

								</ul>
							</li>
							<li><a class="dropdown-item" href="about-us.php">About Us</a>
							</li>
							<li><a class="dropdown-item" href="contact-us.php">Contact Us</a>
							</li>
							<li><a class="dropdown-item" href="authentication-signin.php">Sign In</a>
							</li>
							<li><a class="dropdown-item" href="authentication-signup.php">Sign Up</a>
							</li>
							<li><a class="dropdown-item" href="authentication-forgot-password.php">Forgot
									Password</a>
							</li>
						</ul>
					</li>

					<li class="nav-item"> <a class="nav-link" href="about-us.php">About Us </a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact Us </a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="shop-categories.php">Our Store</a>
					</li>
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">My Account <i class='bx bx-chevron-down'></i></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="account-dashboard.php">Dashboard</a>
							</li>
							<li><a class="dropdown-item" href="account-downloads.php">Downloads</a>
							</li>
							<li><a class="dropdown-item" href="account-orders.php">Orders</a>
							</li>
							<li><a class="dropdown-item" href="account-payment-methods.php">Payment Methods</a>
							</li>
							<li><a class="dropdown-item" href="account-user-details.php">User Details</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>