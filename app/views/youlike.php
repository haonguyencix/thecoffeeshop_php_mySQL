<?php
// Create connection
$conn = include('./config/connection.php');

$sql = "SELECT * FROM products WHERE category_id = 606 ORDER BY category_id DESC LIMIT 3";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
    <div data-aos="fade-up" class="product__item mb-3">
        <a href="product-detail-page.php?id=<?=$row["product_id"]?>">
            <img class="product__img mb-3" src="<?=$row["product_img"]?>" alt="<?=$row["product_img"]?>" width="100%"
                height="350px">
        </a>
        <h3 class="product__name youlike__name"><?php echo $row["product_name"] ?></h3>
        <p class="product__price"><?php echo number_format($row["list_price"])?> VND</p>
        <button class="btn btn__buynow" data-productid="<?=$row["product_id"]?>" data-toggle="modal"
            data-target="#cart">
            <span>Mua ngay</span>
        </button>
        <a class="btn btn__detail youlike__detail" href="product-detail-page.php?id=<?=$row["product_id"]?>">
            <span>Tìm hiểu thêm</span>
        </a>
    </div>
</div>
<?php
    };
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>