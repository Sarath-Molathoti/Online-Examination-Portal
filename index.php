<!DOCTYPE html>
<html>
<head>
	<title>Online Examination Portal</title>

<style type="text/css">
	
	.home_body{
		background-image:url(home.jpg);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		padding-top: 30px;
		height: 538px;
	}
	p{
		font-size: 40px;
		color: #800000;
		margin-top: 100px;
	}
	.buttons{
		margin-top: 100px;
	}
	.buttons a{
		border: 2px solid pink;
		background-color: black;
		color: white;
		font-size: 25px;
		width: 90px;
		height: 30px;
		padding: 20px;
		border-radius: 9px;
		margin-left: 80px;
	}
	.buttons a:hover{
		padding: 25px;
		text-decoration: none;
		font-size: 35px;
		height: 60px;
	}
	
</style>
</head>
<body>
	<?php
      include "header.php";
    ?>
	<div class="home_body">
		<center>
		<p><b>Online Examination Portal</b></p>
		<div class="buttons">
			<a href="signup.php">SignUp</a>
			<a href="login.php">Login</a>
		</div>	
	    </center>
	</div>	
</body>
</html>