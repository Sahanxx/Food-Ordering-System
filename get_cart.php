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
    $sql = "SELECT item_name AS name, item_price AS price FROM cart WHERE user_id='$user_id'";
    $result = $conn->query($sql);

    $cart = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cart[] = $row;
        }
    }
    echo json_encode($cart);
} else {
    echo json_encode([]);
}

$conn->close();
?>
