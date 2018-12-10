<?php
include 'koneksiITEM.php';
$category_id   = $_POST['Category_id'];
$name          = $_POST['name'];
$price         = $_POST['price'];
$status        = $_POST['status'];

$sql = "insert into Item (Category_id, name, price, status) values ('$category_id','$name','$price','$status')";
mysqli_query($connect,$sql);
header('location:FakhriIndexitem.php');
?>
