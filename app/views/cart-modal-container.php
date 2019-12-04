<?php
// Create connection
$conn = include('./config/connection.php');

$id = mysqli_real_escape_string($conn, $_GET['productId']);

$sql = "SELECT * FROM products WHERE product_id = '$id' LIMIT 1";
$result = $conn->query($sql);

if($result){
    $row = $result->fetch_assoc();
?>
<div class="row">
    <div class="col-3">
        <img src="<?=$row["product_img"]?>" alt="<?=$row["product_name"]?>" width="100%">
    </div>
    <div class="col-9 d-flex align-items-center">
        <div>
            <h5>
                <?php echo $row["product_name"] ?>
            </h5>
            <p class="mb-0">
                <span id="productPrice">
                    <?php echo $row["list_price"] ?>
                </span>
                VND
            </p>
        </div>
    </div>
</div>
<?php
} else{
    echo "0 results"; 
}
?>