<?php
  include 'login_header.php';
  require 'db_connect.php';
 // require 'time.js';
 
  session_start();
  if (isset($_POST['next_btn'])) {
  $_SESSION['counter']++;
  }
  elseif(isset($_POST['pre_btn'])){
  	 $_SESSION['counter']--;
  }else{
     $_SESSION['counter']++;
  }
  $no = $_SESSION['counter'];
  $result=mysqli_query( $con, "SELECT * FROM questions WHERE QID='$no' ") or die("Could not execute query: " .mysqli_error($con));
  $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<style type="text/css">
		.qns{
			background-color: Lavender;
			margin-left: 100px;
			margin-top: 50px;
			border: 2px solid blacck;
			width: 800px;
			padding: 20px;
		}
	</style>
	
</head>
<body>
	<div id="response"></div>
	
	<div class="qns">
		
		<form  name="myform" action="quiz.php" method="POST">
		
		<table>
			<tr><td><?php echo $row['QID'].'. '.$row['QUESTION']; ?></td></tr>
			<tr><td><input type='radio' name="choice"><?php echo $row['ANS1']; ?></td></tr>
			<tr><td><input type='radio' name="choice"><?php echo $row['ANS2']; ?></td></tr>
			<tr><td><input type='radio' name="choice"><?php echo $row['ANS3']; ?></td></tr>
			<tr><td><input type='radio' name="choice"><?php echo $row['ANS4']; ?></td></tr>
			<tr><td><button name="next_btn">Next Question</button></td></tr>
			<tr><td><button name="pre_btn">Previous Question</button></td></tr>
		</table>
	</form>
	
	</div>
	
</body>
<script type="text/javascript">
	var x = setInterval(fun1,1000);
	setTimeout('xx()',60000);
	function fun1(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","response.php",false);
		xmlhttp.send(null);
		var str = document.getElementById("response").innerHTML=xmlhttp.responseText;
		/*if(str.slice(7,9) == "58"){
			window.location.href='login.php';
		}*/

	}
	function xx(){
			clearInterval(x);
			alert("Time Up.Get out of the room");
			window.location.href='login.php';
			//clearInterval(y);
		}
		
</script>

</html>