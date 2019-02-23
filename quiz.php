<?php
  require 'login_header.php';
  require 'db_connect.php';
 
  session_start();
  $typeid=$_SESSION['typeid'];
  $rad_val=5;
 
  if(isset($_POST['next_btn']) || isset($_POST['sub_btn']) || isset($_POST['pre_btn'])){
  	$qid = $_SESSION['counter'];
  	if (isset($_POST['choice'])) {
  		$yourans = $_POST['choice'];
  		$check=mysqli_query($con,"SELECT * FROM user_answers WHERE TYPEID='$typeid' AND QID='$qid' ");
  		$c=mysqli_num_rows($check);
  		if($c!=0){
  		    mysqli_query($con,"UPDATE user_answers SET USER_ANS='$yourans' WHERE TYPEID='$typeid' AND QID='$qid' ");
  		}else{
  		mysqli_query($con,"INSERT INTO user_answers(TYPEID,QID,USER_ANS) VALUES ('$typeid','$qid','$yourans')");
  	    }
  	 	//$_SESSION['attempted']++; 	 	
  	 	/* $result2=mysqli_query($con,"SELECT * FROM questions WHERE TYPEID='$typeid' AND QID='$qid' AND ANS='$yourans' ") or die("Could not execute query: " .mysqli_error($con));
  		 $count2=mysqli_num_rows($result2);
  		if($count2==1){
  		 	//$_SESSION['score']++;
  		}
  		else{
  			//$_SESSION['wrong']++;
  		 	$a = $_SESSION['wqid']++;
  		 	$wrong_qns=mysqli_query($con,"INSERT INTO wrong(TYPEID,WQID,QID) VALUES ('$typeid','$a','$qid') ");	 	
  		}
  	}
  	else{
  		$a = $_SESSION['wqid']++;
  		mysqli_query($con,"INSERT INTO wrong(TYPEID,WQID,QID) VALUES ('$typeid','$a','$qid') ");
  	 	//$_SESSION['not_attempted']++;
  	}*/
  }
  }

   /*if (isset($_POST['n_submit'])) {
  	  echo "<script>
				var r=alert('Your exam is Over');
 	 			window.location.href='result.php';
 		      </script>";
    }*/

  if(isset($_POST['next_btn'])){
    $_SESSION['counter']++;
  }elseif(isset($_POST['pre_btn'])){
    $_SESSION['counter']--;
  }elseif(isset($_POST['sub_btn'])){
  	  echo "<script>
				var r=alert('Your exam is Over');
 	 			window.location.href='quiz_eval.php';
 		      </script>";
  }

  $no = $_SESSION['counter'];
  $result1=mysqli_query($con,"SELECT * FROM questions WHERE TYPEID='$typeid' ") or die("Could not execute query: " .mysqli_error($con));
  $number_of_qns=mysqli_num_rows($result1);
  $_SESSION['total']=$number_of_qns;
  


  $result=mysqli_query( $con, "SELECT * FROM questions WHERE QID='$no' AND TYPEID='$typeid' ") or die("Could not execute query: " .mysqli_error($con));
  $row=mysqli_fetch_assoc($result);

  $result2=mysqli_query($con,"SELECT * FROM user_answers WHERE QID='$no' AND TYPEID='$typeid' ");
  $count=mysqli_num_rows($result2);
  if ($count!=0) {
  	$row2=mysqli_fetch_assoc($result2);
  	$rad_val=$row2['USER_ANS'];
  }
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
			<tr><td><input type='radio' name="choice" value="0" <?php if($rad_val==0){?> checked="checked" <?php } ?>>
				<?php echo $row['ANS1']; ?></td></tr>
			<tr><td><input type='radio' name="choice" value="1" <?php if($rad_val==1){?> checked="checked" <?php } ?>>
				<?php echo $row['ANS2']; ?></td></tr>
			<tr><td><input type='radio' name="choice" value="2" <?php if($rad_val==2){?> checked="checked" <?php } ?>>
				<?php echo $row['ANS3']; ?></td></tr>
			<tr><td><input type='radio' name="choice" value="3" <?php if($rad_val==3){?> checked="checked" <?php } ?>>
				<?php echo $row['ANS4']; ?></td></tr>
			<?php 
			if($no==1){
			echo '<tr><td><button name="next_btn">Next Question</button></td></tr>';
			echo '<tr><td><button name="sub_btn">Submit</button></td></tr>';
			}
			?>
			<?php 
			if($no!=$number_of_qns && $no!=1){
			echo '<tr><td><button name="next_btn">Next Question</button></td></tr>';
			echo '<tr><td><button name="pre_btn">Previous Question</button></td></tr>';
			echo '<tr><td><button name="sub_btn">Submit</button></td></tr>';
		    }
		    ?>
		    
			<?php 
			if($no==$number_of_qns){
			echo '<tr><td><button name="pre_btn">Previous Question</button></td></tr>';
			echo '<tr><td><button name="sub_btn">Submit</button></td></tr>';
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