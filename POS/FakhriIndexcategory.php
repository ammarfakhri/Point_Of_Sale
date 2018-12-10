<html>
	<head>
		<title>Index-Category</title>
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
			<th>Name</th>
			<th>Action</th>
		</tr>
		<?php
			include 'connectCAT.php';
			$nomor  = 1;
			$sql    = "select * from Category";
			$result = mysqli_query($connect,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['name']."</td>
						<td>
							<a href='editCAT.php?id=".$row['id']."'>Edit</a>
							<a href='deleteCAT.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apa kau mencoba menghapusku :(\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
		<div id="left">
		<a href="FakhriIndexcategory.php" class="aktif">Category</a>
		<a href="FakhriIndexitem.php">Item</a>
		<a href="FakhriIndexorder.php">Order</a>
		<a href="Fakhricreatecategory.php" class="AAA">Create</a>
	</div>
	</body>
</html>		
