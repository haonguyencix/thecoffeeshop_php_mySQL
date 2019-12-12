<?php
// Create connection
$conn = include('./config/connection.php');

$sql1 = "SELECT * FROM products_categories ORDER BY category_id ASC";

$result1 = $conn->query($sql1); 

if($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
?>
<div class="pt-5" id="<?=$row["category_id"]?>">
    <h1 class="category__title section__title my-4">
        <?php echo mb_strtoupper($row["category_name"]) ?>
    </h1>
    <div class="row">
        <?php
    $sql2 = "SELECT * FROM products WHERE category_id = '".$row['category_id']."'";

    $result2 = $conn->query($sql2); 

    if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
?>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="product__item mb-3 bg-white" style="border-radius: 5px">
                <a href="product-detail-page.php?id=<?=$row["product_id"]?>"><img class="product__img mb-3"
                        src="<?=$row["product_img"]?>" alt="<?=$row["product_name"]?>" width="100%" height="240px">
                </a>
                <div class="px-3 pb-3">
                    <h3 class="product__name mb-1"><?php echo $row["product_name"] ?></h3>
                    <p class="product__price mb-1"><?php echo number_format($row["list_price"])?> VND</p>
                    <a class="btn btn__buynow" href="#"><span>Mua ngay</span></a>
                </div>
            </div>
        </div>
        <?php
    };
} else {
    echo "0 results";
}
?>
    </div>
</div>
<?php
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>