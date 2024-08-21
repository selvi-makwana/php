<?php
// Create table for users
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)";
$conn->query($query);

// Insert sample user data
$query = "INSERT INTO users (username, password) VALUES ('admin', '" . password_hash('password123', PASSWORD_BCRYPT) . "')";
$conn->query($query);

$conn->close();
?>