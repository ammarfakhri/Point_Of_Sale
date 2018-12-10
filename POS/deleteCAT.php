<?php
include 'connectCAT.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM Category WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:FakhriIndexcategory.php');
?>
