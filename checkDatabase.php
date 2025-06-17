<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_github";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if database exists
if ($conn->select_db($dbname)) {
    echo "Database '$dbname' exists.";
} else {
    echo "Database '$dbname' does not exist.";
}

$conn->close();
?>
