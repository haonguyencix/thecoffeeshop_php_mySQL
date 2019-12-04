<?php
// Create connection
$conn = include('./config/connection.php');

$sql = "SELECT * FROM products WHERE product_id = '".$_GET['id']."' LIMIT 1";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12'>";
    echo "<div class='product__img'>";
    echo "<img class='product__img--featured' src=".$row["product_img"]." alt=".$row["product_name"]." width='100%'>";
    echo "</div>";
    echo "</div>";
    echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12'>";
    echo "<div class='product__info'>";
    echo "<h1 class='product__info--title'>".$row["product_name"]."</h1>";
    echo "<p class='product__info--price'>".number_format($row["list_price"])." VND</p>";
    echo "<p class='product__info--desc'>".$row["product_detail"]."</p>";
    echo "<a class='btn btn__buynow mb-3' href='#'><span>Mua ngay</span></a>";
    echo "<p>Giao hàng tận nơi <span class='product__info--hotline'> 1800 6936</span></p>";
    echo "</div>";
    echo "</div>";
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);
?>