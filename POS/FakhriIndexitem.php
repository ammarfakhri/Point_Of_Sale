<html>
	<head>
		<title>Index-Item</title>
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
			<th>Category</th>
			<th>Name</th>
			<th>Cpt.Price</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php
			include 'koneksiITEM.php';
			$nomor  = 1;
			$sql    = "select * from Item";
			$result = mysqli_query($connect,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['Category_id']."</td>
						<td>".$row['name']."</td>
						<td>".$row['price']."</td>
						<td>".$row['status']."</td>
						<td>
							<a href='editITEM.php?id=".$row['id']."'>Edit</a>
							<a href='deleteITEM.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
		<div id="left">
		<a href="FakhriIndexcategory.php">Category</a>
		<a href="FakhriIndexitem.php" class="aktif">Item</a>
		<a href="FakhriIndexorder.php">Order</a>
		<a href="Fakhricreateitem.php" class="AAA">Create</a>
	</div>
	</body>
</html>		
