<?php
// Create connection
$conn = include('./config/connection.php');

$sql = "SELECT * FROM stores";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='store__item mb-3'>";
        echo "<img class='mb-3' src=".$row["store_img"]." alt=".$row["store_name"]." width='100%'>";
        echo "<h3 class='store__name'>".$row["store_name"]."</h3>";
        echo "</div>";
    };
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);
?>
