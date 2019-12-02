<?php
// Create connection
$conn = include('./config/connection.php');

$sql = "SELECT * FROM products ORDER BY RAND() LIMIT 3";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<div class='col-lg-4 col-md-6 col-sm-12 col-xs-12'>
    <div class='product__item mb-3'>
        <?php
            echo "<a href='product-detail-page.php?id=".$row['product_id']."'><img class='product__img mb-3' src=".$row["product_img"]." alt=".$row["product_name"]." width='100%' height='350px'></a>";
            echo "<h3 class='product__name youlike__name'>".$row["product_name"]."</h3>";
            echo "<p class='product__price'>".number_format($row["list_price"])." VND</p>";
            echo "<a class='btn btn__buynow' href='#'><span>Mua ngay</span></a>";
            echo "<a class='btn btn__detail youlike__detail' href='product-detail-page.php?id=".$row['product_id']."'><span>Tìm hiểu thêm</span></a>";
        ?>
    </div>
</div>
<?php
    };
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);
?>