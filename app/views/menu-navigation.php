<?php
// Create connection
$conn = include('./config/connection.php');

$sql = "SELECT * FROM products_categories ORDER BY category_id ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<li class="my-2">
    <a class="category__item" href="#<?=$row["category_id"]?>">
        <?php echo mb_strtoupper($row["category_name"]) ?>
    </a>
</li>
<?php
    };
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>