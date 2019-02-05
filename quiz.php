<?php
  include 'login_header.php';
  require 'db_connect.php';
  $result=mysqli_query( $con, "SELECT * FROM questions WHERE TYPEID='1' ") or die("Could not execute query: " .mysqli_error($con));
  $row=mysqli_fetch_array($result);
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
	
	<div class="qns">
		<p id="timer"></p>
		<table>
			<tr><td><?php echo $row['QID'].". ".$row['QUESTION']?></td></tr>
			<tr><td><input type="radio"><?php echo $row['ANS1']?></td></tr>
			<tr><td><input type="radio"><?php echo $row['ANS2']?></td></tr>
			<tr><td><input type="radio"><?php echo $row['ANS3']?></td></tr>
			<tr><td><input type="radio"><?php echo $row['ANS4']?></td></tr>
			<tr><td><input type="button" value="Next Question" onclick="func()"></td></tr>
		</table>
	</div>
</body>
<script type="text/javascript">
		var s=59;
		var m=1;
		
		function func1(){
			document.getElementById("timer").innerHTML = m + " : " + s;
			s--;
		}
		function func2(){
			s = 59;
			document.getElementById("timer").innerHTML = m + " : " + s;
			m--;
		}
		var x = setInterval('func1()',1000);
		var y = setInterval('func2()',60000);
		function xx(){
			clearInterval(x);
			clearInterval(y);
		}
		setTimeout('xx()',120000);

	</script>
</html>