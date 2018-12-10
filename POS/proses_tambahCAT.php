<?php
include 'connectCAT.php';
$nama          = $_POST['name'];

$sql = "insert into Category (name) values ('$nama')";
mysqli_query($connect,$sql);
header('location:FakhriIndexcategory.php');
?>
