<?php
$servername = "localhost";
$username = "root";  // Change this if your DB user is different
$password = "";      // Add your DB password if needed
$dbname = "travel_saathi";  // Use the correct database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
