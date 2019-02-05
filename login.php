<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<style type="text/css">
	.login-page{
		background-color: pink;
		height: 400px;
		width: 300px;
		padding: 15px;
		margin-top: 50px;
	}
	input{
		border: 2px solid blue;
		border-radius: 8px;
		width: 250px;
		height: 25px;
		padding: 5px;
		margin-top: 20px;
	}
	button{
		height: 40px;
		color: white;
		background-color: black;
		padding: 5px;
		width: 80px;
		font-size: 20px;
		margin-left: 10px;
		margin-top: 20px;
		border-radius: 8px;
	}
	button:hover{
		background-color: #00ff00;
		color: black;
	}
</style>
</head>
<body>
	<?php
      include "header.php";
    ?>
<center>
<div class="login-page">
	<h2 style="margin-top: 100px;">Login to Account to take Quiz</h2>
<form  name="myform" onsubmit="return check()" action="login_check.php" method="POST">
      <input type="text" placeholder="Email" name="n_email"></br>
	  <input type="password" placeholder="Password" name="n_pass"></br>
	  <button>Login</button>
	  <p class="message">New User?<a href="signup.html" style="color:black">Sign-up</a></p>
</form>
</div>
</center>
					<script>
	                function check(){
					var j_password=document.myform.n_pass.value;
	                if(j_password.length<6){
	                alert("should have atleast 6 characters");
					return false;
	                }
					}
					</script>
</body>
</html>