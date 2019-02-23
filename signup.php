<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
<style type="text/css">
	body{
		margin: 0px;
		padding: 0px;
		background-image: url(images/img6.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		color: white;
		font-family: sans-serif;
	}
	.class1{
		margin: 0px;
		padding: 0px;
		background-color: rgba(0,0,0,0.9);
		height: 950px;
		width: 580px;
		margin-bottom: 30px;
		border-radius: 10px;
		margin-top: 90px;
	}
	input{
		outline: none;
		border: none;
		width: 270px;
		height: 30px;
		background: transparent;
		font-size: 15px;
		color: white;
		border-bottom: 2px solid white;
		margin-left: 10px;
		margin-bottom: 10px;
		font-family: sans-serif;
	}
	input:hover{
		border-bottom: 2px solid orangered;
		height: 35px;
	}
	select{
		outline: none;
		border: none;
		width: 270px;
		height: 35px;
		background: transparent;
		font-size: 15px;
		color: black;
		border-bottom: 2px solid white;
		margin-bottom: 15px;
		font-family: sans-serif;
		margin-left: 10px;
	}
	button{
		border: none;
		outline: none;
		width: 200px;
		height: 45px;
		background-color: #fb2525;
		border-radius: 10px;
		margin-left:100px;
		margin-top: 30px;
		margin-bottom: 30px;
		color: white;
		font-size: 18px;
		font-weight: bold;

	}
	button:hover{
		background-color: cyan;
		cursor: pointer;
		color: black;
	}
    a{
    	text-decoration: none;
    	color: lavender;
    	margin-left: 15px;
    	font-size: 20px;
    }
    a:hover{
    	color: red;
    }
    h1{
    	color:lime;
    }
    p{
    	margin: 0px;
    	padding: 0px;
    	font-size: 32px;
    	color:#ff00ff;
    	margin-top: 25px;
    	text-align: center;
    	font-weight: bold;
    	font-family: sans-serif;
    }
    ::placeholder {
        color: plum;
    }
</style>
</head>
<body>
	<?php
      require "header.php";
    ?>
<center>	
<form name="myform" onsubmit="return check()" action="register.php" method="POST">
	<div class="class1">
	   <table>
	   		 <div class="class2">
	   		 <tr><td colspan="2"><p>Sign Up</p></td></tr>
	   		 <tr><td colspan="2"><h1>Personal Details</h1></td></tr>
             <tr><td>Name </td><td><input type="text" name="n_name" required="true"> </td></tr>
             <tr><td>Email </td><td><input type="email" name="n_email" required="true"></td></tr>
             <tr><td>Mobile Number </td><td><input type="text" name="n_mobile" required="true"></td></tr>
             <tr><td>Password </td><td><input type="password" name="n_password" required="true"> </td></tr>
             <tr><td>Confirm Password </td><td> <input type="password" name="n_cpassword" required="true"></td></tr>
             <tr><td>Gender</td><td>
             	<select name="n_gender" required="true">
				          <option value="Male">Male</option>
				          <option value="Female">Female</option>
				          <option value="Others">Others</option>
				</select>
             </td></tr>
             <tr><td>Date of Birth</td><td><input type="text" name="n_dob" placeholder="dd/mm/yyyy" required="true"></td></tr>
  
             <tr><td colspan="2"><h1>Educational Details</h1></td></tr>
             <tr><td>College</td><td><input type="text" name="n_college" required="true"></td></tr> 
             <tr><td>Roll No </td><td> <input type="text" name="n_rollno" required="true"></td></tr>  
             <tr><td>Year</td><td>
             	<select name="n_year" required="true" placeholder="">
				          <option value="1st year">1st year</option>
				          <option value="2nd year">2nd year</option>
				          <option value="3rd year">3rd year</option>
				          <option value="4th year">Final year</option>
				</select>
             </td></tr>
             <tr><td>Branch</td><td>
             	<select name="n_branch" required="true" placeholder="">
				          <option value="CSE">CSE</option>
				          <option value="ECE">ECE</option>
				          <option value="EEE">EEE</option>
				          <option value="CE">CE</option>
				          <option value="ME">ME</option>
				</select>
             </td></tr>
             <tr><td colspan="2"><button>Register</button></td></tr>
             <tr><td colspan="2">Already have an account?<a href="login.php">Sign In</a></td></tr>
         </div>
       </table>
   </div>
</form>
</center>
</div>
<script>
	    function check(){
	    	var j_name = document.myform.n_name.value;
		    var j_password=document.myform.n_password.value;
			var j_cpassword=document.myform.n_cpassword.value;
			var j_mobileno=document.myform.n_mobile.value;
			if(n_mobile.length!=10){
		    	alert("Mobile Number must contain 10 digits");
		    	return false;
			}
	    	if(n_password.length<6){
	       	    alert("should have atleast 6 characters");
				return false;
	    	}
	   	    if(n_password!=n_cpassword){
				alert("Passwordand Confirm Password must be same");
				return false;
			}
			else{
				alert("Registered Successfully");
			}
		}	  
</script>
</body>
</html>