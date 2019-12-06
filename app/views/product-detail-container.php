<?php
// Create connection
$conn = include('./config/connection.php');

$sql = "SELECT * FROM products WHERE product_id = '".$_GET['id']."' LIMIT 1";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
?>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft">
    <div class="product__img">
        <img class="product__img--featured" src="<?=$row["product_img"]?>" alt="<?=$row["product_name"]?>" width="100%">
    </div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
    <div class="product__info">
        <h1 class="product__info--title"><?php echo $row["product_name"] ?></h1>
        <p class="product__info--price"><?php echo $row["list_price"] ?> VND</p>
        <p class="product__info--desc"><?php echo $row["product_detail"] ?></p>
        <button class="btn btn__buynow mb-3" data-productid="<?=$row["product_id"]?>" data-toggle="modal"
            data-target="#cart">
            <span>Mua ngay</span>
        </button>
        <p>Giao hàng tận nơi <span class="product__info--hotline"> 1800 6936</span></p>
    </div>
</div>
<?php
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);
?>