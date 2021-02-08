@extends('layouts.master')
@section('Title', 'ICE CREAM')
@section('section')

<link rel="icon" href="img/logo.png" type="image">
<link rel="stylesheet" type="text/css" href="cs/style.css">
</head>
<style>
table{

	background-color: cadetblue;
	color: white;
	table-layout: auto;
	width:450px;
	height: 200px;
	padding-top: 20px;
	padding-bottom: 0px;
	font-size: 25px;
	text-align: center;
	border:1px solid black;
	border-collapse: collapse;	
}
body{
	height: 100%;
	background-image: url("img/bg.png");
}
h1{
	font-size: 50px;
	color: white;
	float: left;
}
b{
	font-size: 30px;
}
.button{
	background-color: white;
	color: black;
	padding: 0px;
	padding-bottom: 2px;
	padding-left: 5px;
	padding-right: 5px;
	font-size: 16px;
	border: 1px solid grey;
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
.left{
float: left;
}

.sub{
	width:450px;
}
 footer{
	font-size: 17px;
	font-weight: bold;
	text-align: center;
	background: grey;
	color: white;
	font-family: Tahoma;
}
</style>
</head>

<body>
<header>

		<form method="POST" action="/prod" class="prod">
		 @csrf
		<div class="main">
			@csrf
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
	</header>
<center>
    <br>
	<div style="background-color: cadetblue; color: white;" class="sub">
    <b>Add Products</b>
	</div>
		<br><br>
			<table>
				<form action="http://localhost:8000/prod" method="POST">
		<tr>
			<td>
				Product ID
			</td>
			<td>
				<input type="text" name="prod_id" placeholder="Product ID" required="">
			</td>
		</tr>
		<tr>
			<td>
				Flavor
			</td>
			<td>
				<input type="text" name="prod_name" placeholder="Flavor" required="">
			</td>
		</tr>
		<tr>
			<td>
				Price
			</td>
			<td>
				<input type="text" name="prod_price" placeholder="Price" required="">
			</td>
		</tr>
		<tr>
			<td>
				Quantity
			</td>
			<td>
				<input type="text" name="prod_quantity" placeholder="Quantity" required="">
			</td>
		</tr>
		
		<tr>
			<td>
				
			</td>
	
			<td>
				<input type="submit" value="Save" class="btn btn-success" name="btnSave">
				&nbsp;<a href="http://localhost:8000/prod" class="button">Records</a>
			</td>
		</tr>

	</form>


</table>
		
</center>

@endsection