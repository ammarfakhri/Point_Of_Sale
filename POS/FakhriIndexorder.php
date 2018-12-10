<html>
	<head>
		<title>Index-order</title>
<style>
#index {
	border-collapse: collapse;
	width: 50%;
	float: right;
	margin-right: 500px;
}
#index tr, #index th{
	border: 2px solid black;
	font-size: 15px;
	background-color: #4f4f4f;
	color: white;
	font-family: arial;
	padding: 5px;
}
#index tr td{
	border: 2px solid black;
	font-size: 15px;
	background-color: #a5a5a5;
	color: white;
	font-family: arial;
	padding: 5px;
}
#index tr, #index th:hover {
	background-color: #a5a5a5;
}
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
#left a.AAA:hover {
	color: green;
}
#index tr, #index td{
	border: 2px solid black;
	font-size: 15px;
	background-color: #a5a5a5;
	color: white;
	font-family: arial;
	padding: 10px;
}
#index #A {
	color: white;
	text-decoration: none;
}
#index #B {
	color: white;
	text-decoration: none;
}
#index #A:hover {
	color: red;
}
#index #B:hover {
	color: red;
}
</style>
	</head>
	<body>
		<table id="index">
		<tr>
			<th>No</th>
			<th>Table Number</th>
			<th>Item</th>
			<th>Quantity</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		<?php
			include 'koneksiOrdeR.php';
			$nomor  = 1;
			$sql    = "select * from Order";
			$result = mysqli_query($connect,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['table_number']."</td>
						<td>".$row['item_id']."</td>
						<td>".$row['qty']."</td>
						<td>".$row['total']."</td>
						<td>
							<a href='editOrdeR.php?id=".$row['id']."'>Edit</a>
							<a href='deleteOrdeR.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
		<div id="left">
		<a href="FakhriIndexcategory.php">Category</a>
		<a href="FakhriIndexitem.php">Item</a>
		<a href="FakhriIndexorder.php" class="aktif">Order</a>
		<a href="Fakhricreateorder.php" class="AAA">Create</a>
	</div>
	</body>
</html>		
