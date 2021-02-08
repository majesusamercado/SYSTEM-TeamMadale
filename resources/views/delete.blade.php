@extends('layouts.master')
@section('Title', 'DELETE')
@section('section')

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" href="img/logo.png" type="image">

<style>
 footer{
	font-size: 17px;
	font-weight: bold;
	text-align: center;
	background: grey;
	color: white;
	font-family: Tahoma;
}
h1{
	font-size: 50px;
	color: white;
	float: left;
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
.header
{
  padding:10px;
  color:#484848;
  font-size:20px;
  height:150px;
  margin-top: 10px;
  margin-bottom:0px;
}
.left
{
	float: left;
}
h2{
	color: white;
	font-size: 30px;
	width:450px;
	background-color: cadetblue;

}
a{
	color: white;
	font-size: 20px;
	background-color: cadetblue;

}
</style>

<header>

	<form method="POST" action="/prod" class="prod">
		 @csrf
	
		<div id="container">
		<div class="header" style="background-color: grey;">
			<div class="logo"><img src="img/logo.png" width="100" height="90" class="left">
			<h1>Aice Ice Cream</h1>
		</div>
		</div>

		</form>
	</header>


<center>


<?php
$db = mysqli_connect('localhost', 'root', '', 'dbsystem');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php

if (isset($_GET['prod_id']))
{

$result = mysqli_query($db,"DELETE FROM tblprod WHERE prod_id=".$_GET['prod_id']);
if($result==true)
	echo "<h2>Sucessfully Deleted!</h2>";
header("Location:http://localhost:8000/prod");
}

?>

<a href="http://localhost:8000/prod" style="background-color: grey; margin-right:10px;"> RETURN</a>	
			
</center>
@endsection