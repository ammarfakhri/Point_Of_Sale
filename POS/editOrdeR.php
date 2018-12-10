<html>
	<head>
		<title>Order Data</title>
<style>
#left{
	width: 10%;
	border: 2px solid;
	margin-top: 15px;
}
#left a{
	text-decoration: none;
	display: block;
	color: black;
	padding: 10px;
}	
#left a:hover {	
	color: red;
}
#left a.aktif {
	color: blue;
}
#data{
	float: right;
	border: 2px solid;
	height: 180px;
	width: 500px;
	padding: 30px;
	margin-right: 750px;
	background-color: #a1a1a1;
}
#name{
	padding: 5px;
	padding-right: 25px;
}
#submit{
	padding: 12px;
	margin-left: 22px;
}
</style>
	</head>
	<body>
		<?php
		include 'koneksiOrdeR.php';
		$ID     = $_GET['id'];
		$sql    = "select * from Order where id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<div id="data">
		<form action="proses_editOrdeR.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			<label id="name">Table Number :</label><input type="text" id="table_number" name="table_number" value="<?php echo $row	['table_number']; ?>>
			<p></p>
			<label id="Item">Item :<select id="item_id" name="item_id">
			<option name="item_id" id="item_id">select</option>
			<option name="item_id" id="item_id" value="<?php echo $row['1']; ?>>Pancake</option>
			<option name="item_id" id="item_id" value="<?php echo $row['2']; ?>>Susu</option></select>
			<p></p>
			<label id="qty">Quantity :<input type="text" id="qty" name="qty" value="<?php echo $row['qty']; ?>>
			<p></p>
			<label id="submit"><input type="submit" id="submit" name="submit"></input>
			<input type="submit"></input>
		</form>
		</div>
		<div id="left">
		<a href="FakhriIndexcategory.php">Category</a>
		<a href="FakhriIndexitem.php" class="aktif">Item</a>
		<a href="FakhriIndexorder.php">Order</a>
		<a href="Fakhricreateitem.php">Create</a>
	</div>
	</body>
</html>
