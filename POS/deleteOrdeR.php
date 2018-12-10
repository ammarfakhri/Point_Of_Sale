<?php
include 'koneksiOrdeR.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM Order WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:FakhriIndexorder.php');
?>
