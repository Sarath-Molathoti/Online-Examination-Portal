<?php
  include 'login_header.php';
  require 'db_connect.php';
 // require 'time.js';
 
  session_start();
 
  if(isset($_POST['next_btn']) || isset($_POST['n_submit'])){
  	 if (isset($_POST['choice'])) {
  	 	$tid = 1;
  	 	$_SESSION['attempted']++;
  	 	$yourans = $_POST['choice'];
  	 	$qid = $_SESSION['counter'];
  	 	 $result2=mysqli_query($con,"SELECT * FROM questions WHERE TYPEID='1' AND QID='$qid' AND ANS='$yourans' ") or die("Could not execute query: " .mysqli_error($con));
  		 $count=mysqli_num_rows($result2);
  		 if($count==1){
  		 	$_SESSION['score']++;
  		 }
  		 else{
  		 	$a = $_SESSION['wrong']++;
  		 	$wrong_qns=mysqli_query($con,"INSERT INTO wrong(TYPEID,WQID,QID) VALUES ('$tid','$a','$qid') ");
  		 	
  		 }
  	 	
  	 }
  	 else{
  	 	$_SESSION['not_attempted']++;
  	 }
  }

   if (isset($_POST['n_submit'])) {
   	  //$_SESSION['tb']=$b[2];
   	  //$_SESSION['tc']=$b[3];
  	  echo "<script>
				var r=alert('Your exam is Over');
 	 			window.location.href='result.php';
 		      </script>";
    }
  $_SESSION['counter']++;
  $no = $_SESSION['counter'];

  $result1=mysqli_query($con,"SELECT * FROM questions WHERE TYPEID='1' ") or die("Could not execute query: " .mysqli_error($con));
  $number_of_qns=mysqli_num_rows($result1);
  $_SESSION['total']=$number_of_qns;
  
  $result=mysqli_query( $con, "SELECT * FROM questions WHERE QID='$no' ") or die("Could not execute query: " .mysqli_error($con));
  $row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<style type="text/css">

		body{
			margin: 0px;
			padding: 0px;
			background-image: url(img8.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		
		table {
			background-color: lavender;
			margin-left: 100px;
			border: 2px solid black;
			width: 800px;
			padding: 20px;
			margin-top: 150px;
		}
		.t1{
			margin-top: -170px;
			margin-left: 1050px;
			background-color: rgba(0,0,0,0.9);
			color: white;
			font-size: 22px;
			width: 200px;
			height: 200px;

		}
		
	</style>
	
</head>
<body>
	<div class="q1">
	
	
	<div class="qns">
		
		<form  name="myform" action="quiz.php" method="POST">
		
		<table>
			<tr><td><?php echo $row['QID'].'. '.$row['QUESTION']; ?></td></tr>
			<tr><td><input type='radio' name="choice" value="0"><?php echo $row['ANS1']; ?></td></tr>
			<tr><td><input type='radio' name="choice" value="1"><?php echo $row['ANS2']; ?></td></tr>
			<tr><td><input type='radio' name="choice" value="2"><?php echo $row['ANS3']; ?></td></tr>
			<tr><td><input type='radio' name="choice" value="3"><?php echo $row['ANS4']; ?></td></tr>
			
			<?php 
			if($no!=$number_of_qns){
			echo '<tr><td><button name="next_btn">Next Question</button></td></tr>';
		    }
		    ?>
		    
			<?php 
			if($no==$number_of_qns){
			echo '<tr><td><button name="n_submit">Submit</button></td></tr>';
			}
			?>
		</table>
	</form>
	
	</div>
	<div class="t1">Total Time : 1 Min</br>Time Ends in <div id="response"></div></div>
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
			alert("Time Up");
			window.location.href='result.php';
			//clearInterval(y);
		}
		
</script>

</html>