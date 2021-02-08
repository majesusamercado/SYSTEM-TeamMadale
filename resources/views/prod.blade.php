@extends('layouts.master')
@section('Title', 'ICE CREAM')
@section('section')




<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" href="img/logo.png" type="image">
<style>
table{
	background-color: cadetblue;
	color: white;
	table-layout: auto;
	width:700px;
	height: 300px;
	padding-top: 20px;
	padding-bottom: 0px;
	font-size: 25px;
	text-align: center;
	border:1px solid black;
	border-collapse: collapse;	
}
body {
  background-image: url("img/bg.png");
  height: 100%;
  width: 100%; 
}
.container a{
	background-color: white;
	color: black;
	padding: 0px;
	padding-bottom: 2px;
	padding-left: 5px;
	padding-right: 10px;
	font-size: 16px;
	border: 1px solid black;
	text-decoration: none;
}
.logo
{
   margin-top:5px;
}

.header
{
  padding:10px;
  color:#484848;
  font-size:20px;
  height:150px;
  margin-top: 10px;
  margin-bottom:0px;
}
span
{ 
	margin-top: 0px;
	font-size: 15px;
	color: white;
}
.right{
 float:right; 
 margin-top:-137px;
}
.button {
	background-color: white;
	color: black;
	padding: 0px;
	padding-bottom: 2px;
	padding-left: 5px;
	padding-right: 5px;
	font-size: 16px;
	border: 1px solid black;
	text-decoration: none;
}
h1{
	font-size: 50px;
	color: white;
	float: left;
}
.left
{
	float: left;
}
 footer{
	font-size: 17px;
	font-weight: bold;
	text-align: center;
	background: grey;
	color: white;
	font-family: Tahoma;
}
a{

	background-color: white;
	color: black;
	padding: 0px;
	padding-bottom: 2px;
	padding-left: 5px;
	padding-right: 5px;
	font-size: 16px;
	border: 1px solid black;
	text-decoration: none;
}

</style>
</head>

<header>

	<form method="POST" action="/prod" class="prod">
		 @csrf
		<div class="main">

			
			<ul>
				<li><a href="http://localhost:8000/logins" style="background-color: grey; margin-right:10px;"> LOGOUT</a></li>	
			</ul>
		</div>
		<div id="container">
		<div class="header" style="background-color: grey;">
			<div class="logo"><img src="img/logo.png" width="100" height="90" class="left">
			<h1>Aice Ice Cream</h1>
		</div>
		</div>

		</form>
	</header>

<body>
<center>
		<tr>
			<td>
			</td>
		</tr>
		<br><br>
		<table border="1">
			<th>Product ID</th>
			<th>Flavor</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Action</th>
	
	<?php


			$servername="localhost";
			$username="root";
			$password="";
			$databasename="dbsystem";

			$connect= mysqli_connect($servername, $username, $password, $databasename);;


			$dataSelect = "Select * from tblprod";
			$query= mysqli_query($connect,$dataSelect);
			$num= mysqli_num_rows($query);
				
			while($row = mysqli_fetch_array($query)){
	?>
			
			<tr>
			

				<td><?=$row['prod_id']?></td>

				<td><?=$row['prod_name']?></td>
				
				<td><?=$row['prod_price']?></td>
				
				<td><?=$row['prod_quantity']?></td>

			

				<th> 
                      <a href="http://localhost:8000/delete?prod_id=<?php echo $row["prod_id"] ?>">Delete</a></th>
                   
				
			</tr>

			
	<?php
}
?>
			<tr>
				<td colspan="5"><?=$num?> Record(s) Found!</td>
			</tr>

		</table>
		<br><br>
		<div class="container">
		
		<td>
			<a href="http://localhost:8000/process" class="btn btn-success">Add Product</a>
			</td>
			</div>
	</center>

@endsection