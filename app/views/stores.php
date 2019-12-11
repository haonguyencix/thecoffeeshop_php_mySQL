<?php
// Create connection
$conn = include('./config/connection.php');

$sql = "SELECT * FROM stores";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<div class="store__item mb-3">
    <img class="mb-3" src="<?=$row["store_img"]?>" alt="
    <?=$row["store_name"]?>" width="100%">
    <h3 class="store__name"><?php echo $row["store_name"] ?></h3>
</div>
<?php
    };
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>