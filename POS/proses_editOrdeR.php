<?php
include 'koneksiOrdeR.php';
$table_number	= $_POST['table_number'];
$item_id	= $_POST['item_id'];
$qty		= $_POST['qty'];
$total		= $_POST['total'];

$sql = "UPDATE Order SET table_number = '$table_number', item_id = '$item_id', qty = '$qty', total = '$total' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:FakhriIndexorder.php');
?>
