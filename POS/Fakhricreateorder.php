<html>
	<head>
		<title>Create order</title>
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
		<form action="proses_tambahOrdeR.php" method="POST">
			<label id="name">Table Number :</label><input type="text" id="table_number" name="table_number">
			<p></p>
			<label id="Item">Item :<select id="item_id" name="item_id">
			<option name="item_id" id="item_id">select</option>
			<option name="item_id" id="item_id" value="1">Pancake</option>
			<option name="item_id" id="item_id" value="2">Susu</option></select>
			<p></p>
			<label id="qty">Quantity :<input type="text" id="qty" name="qty">
			<p></p>
			<label id="submit"><input type="submit" id="submit" name="submit"></input>
		</form>
		</div>
		<div id="left">
		<a href="FakhriIndexcategory.php">Category</a>
		<a href="FakhriIndexitem.php">Item</a>
		<a href="FakhriIndexorder.php" class="aktif">Order</a>
		<a></a>
	</div>
	</body>
</html>		
