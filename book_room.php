<?php
$servername = "localhost"; // Update with your server details
$username = "root"; // Update with your MySQL username
$password = ""; // Update with your MySQL password
$dbname = "silver_spoon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_name = $_POST['room_name'];
    $price = $_POST['price'];
    $total_price = $_POST['total_price'];

    $sql = "INSERT INTO room_bookings (room_name, price, total_price) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdd", $room_name, $price, $total_price);

    if ($stmt->execute()) {
        // Redirect to a success page
        header("Location: thanks.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
