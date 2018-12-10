<html>
	<head>
		<title>Edit Data</title>
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
		include 'koneksiITEM.php';
		$ID     = $_GET['id'];
		$sql    = "select * from Item where id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<div id="data">
		<form action="proses_editITEM.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			<label id="Category_id">Category :<select id="Category_id" name="Category_id">
			<option name="Category_id" id="Category_id">select</option>
			<option name="Category_id" id="Category_id" value="<?php echo $row['1']; ?>">makanan</option>
			<option name="Category_id" id="Category_id" value="<?php echo $row['2']; ?>">minuman</option></select>
			<p></p>
			<label id="name">Nama :<input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
			<p></p>
			<label id="price">Cpt.Price :<input type="text" id="price" name="price" value="<?php echo $row['price']; ?>">
			<p></p>
			<input type="radio" name="status" id="status" value="<?php echo $row['0']; ?>">Tidak Aktif</input>
			<input type="radio" name="status" id="status" value="<?php echo $row['1']; ?>">Aktif</input>
			<p></p>
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
