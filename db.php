
<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = "";
$database = "tour_db"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
