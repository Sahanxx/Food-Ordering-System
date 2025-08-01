<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "silver_spoon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    // Server-side validation
    $errors = [];

    // Validate phone number (must be 10 digits)
    if (!preg_match('/^\d{10}$/', $phone_number)) {
        $errors[] = "Phone number must be 10 digits.";
    }

    // Validate password (min 8 chars, 1 uppercase, 1 lowercase, 1 number, 1 special char)
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        $errors[] = "Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.";
    }

    if (empty($errors)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (username, phone_number, address, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $phone_number, $address, $hashed_password);

        if ($stmt->execute() === TRUE) {
            header("Location: login.html");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Output errors
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }
}

$conn->close();
?>
