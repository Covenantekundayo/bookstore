<?php
session_start();

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
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    // Retrieve product details from the database based on the IDs in the cart
    $productIds = implode(',', $_SESSION['cart']);
    $sql = "SELECT * FROM products WHERE id IN ($productIds)";
    $result = $conn->query($sql);

    // Initialize total price
    $totalPrice = 0;

    // Display cart summary and product details
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<img src='product_images/{$row['image']}' alt='Product Image' width='100'>";
        echo "<p>{$row['name']}</p>";
        echo "<p>Price: $ {$row['price']}</p>";
        echo "</div>";

        // Add the product price to the total
        $totalPrice += $row['price'];
    }

    // Display total price
    echo "<p>Total Price: $ {$totalPrice}</p>";

    // You may want to provide a "Checkout" button that leads to a payment page
    echo "<a href='checkout.php'>Checkout</a>";

} else {
    echo "Your cart is empty.";
}
?>
