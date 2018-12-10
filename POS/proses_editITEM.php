<?php
include 'koneksiITEM.php';
$ID		= $_POST['id'];
$category_id	= $_POST['Category_id'];
$name		= $_POST['name'];
$price		= $_POST['price'];
$status		= $_POST['status'];

$sql = "UPDATE Item SET Category_id = '$category_id', name = '$name', price = '$price', status = '$status', WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:FakhriIndexitem.php');
?>
