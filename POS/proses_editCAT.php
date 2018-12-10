<?php
include 'connectCAT.php';
$ID		= $_POST['id'];
$name		= $_POST['name'];




$sql = "UPDATE Category SET name = '$name' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:FakhriIndexcategory.php');
?>
