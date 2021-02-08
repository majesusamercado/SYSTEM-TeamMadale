@extends('layouts.master')
@section('Title', 'LOGIN')
@section('section')

<style>
.title{
	color: black;
	table-layout: auto;
	width:1000px;
	height: 255px;
	padding-top: 5px;
	padding-bottom: 0px;
	font-size: 16px;
	text-align: center;
	border:2px solid white;
	border-collapse: collapse;
	border-radius: 1px;
}
body{
	background-color: #FFEA97;
	background-size: cover;
	background-position: center;
	height: 100%;
}
ul{
	float: right;
	list-style-type: none;
	margin-top: 25px;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: white;
	padding: 5px 20px;
	border: 1px solid white;
	transition: 0.6s ease;
}
ul li a:hover{
	background-color: white;
	color: black;
}
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
	float: left;
}
.right{
 float:right; 
 margin-top:-137px;
}


.button a{
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

span
{ 
	margin-top: 0px;
	font-size: 15px;
	color: white;
}

.left
{
	float: left;
	margin-bottom: 5px;
	margin-left: 20px;
}

.flex{
display: inline-flex;
}
.regislog{
	margin-top: 30px;
	margin-right: -100px;
}
</style>


			<form style="background-color: grey; height: 80px; padding-top: 10px;" method="POST" action="/logins">
				@csrf
				<div style="padding: 10px; width: 350px; display: inline-flex; ">
				</div><br>
				<div align="right" style="margin-left: 830px; display: inline; width: 700px;">
				<div class="flex">


					
					<div><input style="width: 180px; margin: 5px; font-size: 15px;" placeholder="Username" type="text" name="usname" required />
				</div>
				<div class="loginInput">
					<div><input style="width: 130px; margin: 5px; font-size: 15px;" placeholder="Password" type="Password" name="pass" required /></div>
				</div>
				
				<div class="regislog">
					<a href="http://localhost:8000/homes"> Register Here</a>
				</div> <br>
				<div class="">
					&nbsp;<button style="margin: 7px; font-size: 15;" type="submit"  name="log" > Log In</button> 

				</div>
	
			

			
	</div>
</form>


<?php
		$servername="localhost";
		$username="root";
		$password="";
		$databasename="dbsystem";

		$connect= mysqli_connect($servername, $username, $password, $databasename);

		if (isset($_POST ['log'])){

		$u = $_POST['usname'];
		$p = $_POST['pass'];

			$query= "SELECT * FROM tblregister WHERE uname = '$u' AND password = '$p'";
			$result = mysqli_query($connect, $query);
			$count= mysqli_num_rows($result);

			if ($count>0)
			{
				header("location: http://localhost:8000/prod");
			}
			else {
				echo "<h3><b>Username/Password is Incorrect</b></h3>";
			}
		}
	?>
<br><br><br><br><br><br><br><br>
	<center>
		<div class="title">
			<img src="img/aice.png" width="990" height="250">
		</div>
		</center>


@endsection

