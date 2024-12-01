

<?php
//MYSQLI
$servername = "localhost";  // Database server (usually "localhost")
$username = "root";  // Your MySQL username
$password = "";  // Your MySQL password
$dbname = "bookstore";    // The name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
