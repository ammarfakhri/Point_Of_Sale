<?php
include 'koneksiOrdeR.php';
$table_number	= $_POST['table_number'];
$item_id	= $_POST['item_id'];
$qty		= $_POST['qty'];	
$total  	= $qty % 20;
echo $total	= $_POST['total'];

$sql = "insert into Order (table_number, item_id, qty, total) values ('$table_number', '$item_id', '$qty', '$total')";
mysqli_query($connect,$sql);
header('location:FakhriIndexorder.php');
?>
