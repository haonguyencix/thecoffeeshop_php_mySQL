<?php
// Create connection
$conn = include('./config/connection.php');

$sql = "SELECT * FROM products, products_categories WHERE products.category_id = products_categories.category_id and product_id = '".$_GET['id']."'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
?>
<li class='breadcrumb-item'>
    <a href='menu-page.php'>
        MENU
    </a>
</li>
<li class='breadcrumb-item'>
    <a href='#'>
        <?php echo mb_strtoupper($row["category_name"]) ?>
    </a>
</li>
<li class='breadcrumb-item active' aria-current='page'>
    <?php echo mb_strtoupper($row["product_name"]) ?>
</li>
<?php
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>