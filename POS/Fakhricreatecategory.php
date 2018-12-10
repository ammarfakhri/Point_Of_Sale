<html>
	<head>
		<title>Create Category</title>
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
		<div id="data">
		<form action="proses_tambahCAT.php" method="POST">
			<label id="name">Nama : <input type="text" id="name" name="name" placeholder="Nama : ">
			<p></p>
			<label id="submit"><input type="submit" id="submit" name="submit"></input>
		</form>
		</div>
		<div id="left">
		<a href="FakhriIndexcategory.php" class="aktif">Category</a>
		<a href="FakhriIndexitem.php">Item</a>
		<a href="FakhriIndexorder.php">Order</a>
		<a></a>
	</div>
	</body>
</html>		
