<!DOCTYPE html>
<html>
<head>
	<title>Online Examination Portal</title>

<style type="text/css">
    
    body{
    	margin: 0px;
    	padding: 0px;
    	background-image:url(img8.jpg);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;

    }
	
	.home_body{
		padding-top: 30px;
		height: 538px;
	}
	p{
		font-size: 40px;
		color: red;
		margin-top: 100px;
		margin-left: 100px;
	}
	.buttons{
		margin-top: 100px;
	}
	.buttons a{
		border: 2px solid gold;
		background-color: black;
		color: white;
		font-size: 25px;
		width: 90px;
		height: 30px;
		padding: 20px;
		border-radius: 9px;
		margin-left: 80px;
		text-decoration: none;
	}
	.buttons a:hover{
		background-color: cyan;
		color: black;
		padding: 25px;
		text-decoration: none;
		font-size: 35px;
		height: 60px;
		border: 2px solid black;
	}
	marquee{
		color: orangered;
		font-size: 40px;
		font-weight: bold;
		margin-top: 50px;
	}

	
</style>
</head>
<body>
	<?php
      include "header.php";
    ?>
    
	<div class="home_body">
		<marquee dir="left">Test your skills here</marquee>
		<center>
		<p><b>Online Examination Portal</b></p>
		<div class="buttons">
			<a href="signup.php">Sign Up</a>
			<a href="login.php">Login</a>
		</div>	
	    </center>
	</div>	
</body>
</html>