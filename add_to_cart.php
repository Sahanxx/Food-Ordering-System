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
    $item_name = $_POST['name'];
    $item_price = $_POST['price'];

    $sql = "INSERT INTO cart (user_id, item_name, item_price) VALUES ('$user_id', '$item_name', '$item_price')";
    if ($conn->query($sql) === TRUE) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'not_logged_in';
}

$conn->close();
?>
