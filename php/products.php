<?php
// Create connection
$conn = include('connection.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($item = $result->fetch_assoc()) {
        echo "<div class='col-4'>
                <div class='product__item'>
                    <img src=".$item["product_img"]." alt='product' width='100%' height='350px' class='mb-3 '>
                    <h3 class='product__name'>".$item["product_name"]."</h3>
                    <p class='product__price'>".$item["list_price"]." VND</p>
                    <a class='btn btn__buynow' href='#'><span>Mua ngay</span></a>
                <button class='btn btn__detail'>Tìm hiểu thêm</button>
                </div>
            </div>";
    };
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);
?>