@extends('layouts.master')
@section('Title', 'REGISTER')
@section('section')


<html> 
<head>
<title>Aice Ice Cream</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" href="img/logo.png" type="image">	
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

.register{
	background-color: #F8B430;
	table-layout: auto;
	width:450px;
	height: 240px;
	padding-top: 20px;
	padding-bottom: 0px;
	margin-top: 280px;
	margin-right: 500px;
	font-size: 25px;
	text-align: center;
	border:1px solid black;
	border-collapse: collapse;	
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
</style>
</head>

<center>
     
<div id="" class="regisbody"> 
   
    
                <form style="background-color: grey; height: 80px; padding-top: 10px;" method="POST">
				@csrf
				<div style="padding: 10px; width: 350px; display: inline-flex; ">
				</div><br><br><br><br><br><br><br><br><br>
				<div align="right" style="margin-left: 5px; display: inline; width: 700px;">
				<div class="flex">
                    @csrf
                    	<br><br>
						<center>
						<div class="title">
						<img src="img/aice.png" width="990" height="250">&emsp;&emsp;&emsp;
					</div>

				</center>
				<br>
				<center>  
					<div id="" class="regisbody"> 
   
    
                <form method="POST">
                    @csrf

                        <b> REGISTER HERE</b>
                        <br><br>
                                <div>

                                   &emsp;First Name:&emsp;<input placeholder="First Name" type="text"  name="fname" required /> <br>
                                    &emsp;Last Name:&emsp;<input placeholder="Last Name" type="text"  name="lname" required /><br>
                                    &emsp;Username:&emsp;&nbsp;<input placeholder="Username" type="text"  name="uname" required /><br>
                                    &emsp;Password:&emsp;&nbsp;&nbsp;<input placeholder="Password" type="password"  name="password"  required /><br>
                                     
                            <br>
                                    
                                    <input type="submit" class="button2" value="Register"  name="sub" /> <br>
                            <br>

                                     <a href="http://localhost:8000/logins" class="iam">Login</a>

                           </div>
                    </form> 

           </div>      

    

           </div>      


</center>
</body> 
</html>


@endsection
                        