<?php
require 'db_connect.php';
session_start();
$p_email=$_POST["n_email"];
$p_password=$_POST["n_pass"];
$_SESSION['counter'] = 0;
$_SESSION['score'] = 0;
$_SESSION['wrong'] = 0;
$_SESSION['attempted'] = 0;
$_SESSION['not_attempted'] = -1;
$result=mysqli_query( $con, "SELECT * FROM personal_info WHERE EMAIL='$p_email' AND PASSWORD='$p_password' ") or die("Could not execute query: " .mysqli_error($con));
$row = mysqli_num_rows($result);
	if($row){
		$rows = mysqli_fetch_array($result);
		$_SESSION['username'] = $rows['NAME'];
		echo "<script>
				var r=alert('successful login');
 	 			window.location.href='instructions.php';
 		      </script>";
	}
	else{
		echo "<script>
				var r=alert('Invalid Email or Password');
 	 			window.location.href='login.php';
 		      </script>";
	}
?>