<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<style type="text/css">
body{
	margin: 0px;
	padding: 0px;
	background-image: url(cellphone.jpg);
	background-repeat: none;
	background-size: cover;
	color: white;
}
.login-page{
	margin-top: 140px;
	background-color: rgba(0,0,0,.9);
	border: 1px solid black;
	width: 350px;
	height: 420px;
	box-sizing: border-box;    /*allows us to include the padding and border in an element's total width and height.*/
	border-radius: 10px;
}
input{
	border: none;
	border-bottom: 2px solid white;
	background: transparent;
	outline: none;
	width: 260px;
	height: 35px;
	margin-bottom: 20px;
}
.login-page p{
	margin: 0px;
	padding: 0px;
	text-align: left;
	padding-left: 45px;
	font-family: sans-serif;
}
input[type="text"],input[type="password"]{
	color: #fff;
	font-size: 15px;
}
button{
	width: 260px;
	background: #fb2525;
	outline: none;
	border: none;
	border-radius: 10px;
	height: 40px;
	font-size: 18px;
	color: white;
	font-family: sans-serif;
	margin-bottom: 25px;
	margin-top: 18px;
}
button:hover{
	background: cyan;
	color: black;
	cursor: pointer;
}
p a{
	text-decoration: none;
	color: darkgray;
}
p a:hover{
	color: red;
}
	
</style>
</head>
<body>
	<?php
      include "header.php";
    ?>
<center>
<div class="login-page">
	<h1>Login </h1>
<form  name="myform" onsubmit="return check()" action="login_check.php" method="POST">
	  <p>Email</p>
      <input type="text" placeholder="Enter Email" name="n_email"></br>
      <p>Password</p>
	  <input type="password" placeholder="Enter Password" name="n_pass"></br>
	  <button>Sign In</button></br>	  
</form>
      <p><a href="signup.php">Don't have an Account?</a></p></br>
      <p><a href="forgot.php">Forgot Password?</a></p>
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