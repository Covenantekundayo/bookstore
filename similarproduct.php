<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oladb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate product card HTML
function generateProductCard($row, $imageFolder)
{
    $imagePath = $imageFolder . $row['image'];
    $productCardHTML = "";

    $productCardHTML .= '<div class="item">';
    $productCardHTML .= '<div class="card rounded-0 product-card">';
    $productCardHTML .= '<div class="card-header bg-transparent border-bottom-0">';
    $productCardHTML .= '<div class="d-flex align-items-center justify-content-end">';
    $productCardHTML .= '<a href="javascript:;">';
    $productCardHTML .= '<div class="product-wishlist"> <i class="bx bx-heart"></i>';
    $productCardHTML .= '</div>';
    $productCardHTML .= '</a>';
    $productCardHTML .= '</div>';
    $productCardHTML .= '</div>';

    if (!empty($row['image'])) {
        $productCardHTML .= "<p><img src='{$imagePath}' alt='Image' class='card-img-top'></p>";
    } else {
        $productCardHTML .= "<p>No image available</p>";
    }

    $productCardHTML .= '<div class="card-body">';
    $productCardHTML .= '<div class="product-info">';
    $productCardHTML .= "<a href='javascript:;'>";
    $productCardHTML .= "<p class='product-catergory font-13 mb-1'>" . $row['category'] . "</p>";
    $productCardHTML .= "</a>";
    $productCardHTML .= "<a href='javascript:;'>";
    $productCardHTML .= "<h6 class='product-name mb-2'>" . $row['name'] . "</h6>";
    $productCardHTML .= "</a>";
    $productCardHTML .= '<div class="d-flex align-items-center">';
    $productCardHTML .= '<div class="mb-1 product-price">';
    $productCardHTML .= "<span class='fs-5'> # " . $row['price'] . "</span>";
    $productCardHTML .= '</div>';
    $productCardHTML .= '</div>';
    $productCardHTML .= '<div class="product-action mt-2">';
    $productCardHTML .= '<div class="d-grid gap-2">';
    $productCardHTML .= "<h3 class='btn btn-dark btn-ecomm'><a href='cart.php?id=" . $row['id'] . "'><i class='bx bxs-cart-add'></i> Add to Cart</a></h3>";
    $productCardHTML .= "<a class='btn btn-light btn-ecomm' data-bs-toggle='modal' data-bs-target='#QuickViewProduct' href='product-details.php?id=" . $row['id'] . "'><i class='bx bx-zoom-in'></i> Quick View</a>";
    $productCardHTML .= '</div>';
    $productCardHTML .= '</div>';
    $productCardHTML .= '</div>';
    $productCardHTML .= '</div>';
    $productCardHTML .= '</div>';
    $productCardHTML .= '</div>';

    return $productCardHTML;
}

?>

<section class="py-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-uppercase mb-0">Similar Products</h5>
            <div class="d-flex align-items-center gap-0 ms-auto">
                <a href="javascript:;" class="owl_prev_item fs-2"><i class='bx bx-chevron-left'></i></a>
                <a href="javascript:;" class="owl_next_item fs-2"><i class='bx bx-chevron-right'></i></a>
            </div>
        </div>
        <hr />
        <div class="product-grid">
            <div class="similar-products owl-carousel owl-theme">
                <?php
                $imageFolder = "/olaproject/admin/assets/img/";
                if (!file_exists($imageFolder)) {
                    mkdir($imageFolder, 0777, true);
                }

                $sql = "SELECT id, name, price, category, image FROM product";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo generateProductCard($row, $imageFolder);
                    }
                } else {
                    echo "No posts found.";
                }
                ?>
            </div>
        </div>
    </div>
</section>
