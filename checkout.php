<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "silver_spoon";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT item_name, item_price FROM cart WHERE user_id='$user_id'";
    $result = $conn->query($sql);

    $items = [];
    $total_price = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $items[] = $row['item_name'] . " (" . $row['item_price'] . ")";
            $total_price += $row['item_price'];
        }
        $items = implode(", ", $items);

        $sql = "INSERT INTO orders (user_id, items, total_price) VALUES ('$user_id', '$items', '$total_price')";
        if ($conn->query($sql) === TRUE) {
            $sql = "DELETE FROM cart WHERE user_id='$user_id'";
            $conn->query($sql);
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}

$conn->close();
?>
