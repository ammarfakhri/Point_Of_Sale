<?php
include 'koneksiITEM.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM Item WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:FakhriIndexitem.php');
?>
