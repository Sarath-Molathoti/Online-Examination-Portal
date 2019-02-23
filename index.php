<!DOCTYPE html>
<html>
<head>
	<title>Online Examination Portal</title>

<style type="text/css">
    
    body{
    	margin: 0px;
    	padding: 0px;
    	background-image:url(images/img8.jpg);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;

    }
	
	.home_body{
		padding-top: 30px;
		height: 538px;
	}
	h1{
		font-size: 40px;
		color: red;
		margin-top: 60px;
		margin-left: 80px;
	}
	.buttons{
		margin-top: 100px;
		margin-left: 30px;
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
		margin-left: 100px;
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
		color: lime;
		font-size: 40px;
		font-weight: bold;
		margin-top: 50px;
	}
	.bd{
		border: 3px solid black;
		width: 600px;
		height: 300px;
		margin-left: 300px;
		background-color: rgba(0,0,0,0.9);
		border-radius: 20px;
		margin-top: 20px;
		padding-bottom: 20px;
		padding-right: 20px;

	}

	
</style>
</head>
<body>
	<?php
      include "header.php";
    ?>
    
	<div class="home_body">
		<marquee dir="left">Test your skills here</marquee>
		<div class="bd">
		<h1 style="color: red;">Online Examination Portal</h1>
		<div class="buttons">
			<a href="signup.php">Sign Up</a>
			<a href="login.php">Login</a>
		</div>	
	    </div>
	</div>	
</body>
</html>