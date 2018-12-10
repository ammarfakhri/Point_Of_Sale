<?php
$servername = "localhost";
$username   = "root";
$password   = "124";
$dbname     = "Point_of_sale";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE Category (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
)";
mysqli_query($connect, $sql)
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
