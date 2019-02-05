<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<?php
      include "header.php";
?>
<form name="myform" onsubmit="return check()" action="register.php" method="POST">
	   <table>
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
             <tr><td>Date of Birth</td><td><input type="date" name="n_dob" required="true"></td></tr>
             <tr><td colspan="2"><h1>Educational Details</h1></td></tr>
             <tr><td>College</td><td><input type="text" name="n_college" required="true"></td></tr> 
             <tr><td>Roll No </td><td> <input type="text" name="n_rollno" required="true"></td></tr>  
             <tr><td>Year</td><td>
             	<select name="n_year" required="true">
				          <option value="1st year">1st year</option>
				          <option value="2nd year">2nd year</option>
				          <option value="3rd year">3rd year</option>
				          <option value="4th year">Final year</option>
				</select>
             </td></tr>
             <tr><td>Branch</td><td>
             	<select name="n_branch" required="true">
				          <option value="CSE">CSE</option>
				          <option value="ECE">ECE</option>
				          <option value="EEE">EEE</option>
				          <option value="CE">CE</option>
				          <option value="ME">ME</option>
				</select>
             </td></tr>
             <tr><td><input type="submit" value="Register"></td></tr>
       </table>
</form>
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