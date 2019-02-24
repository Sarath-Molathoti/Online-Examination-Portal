<?php
session_start();
require 'db_connect.php';
$a=$_SESSION['score'];
$b=$_SESSION['useremail'];
$marks=mysqli_query( $con, "UPDATE educational_info SET MARKS='$a' WHERE EMAIL='$b' ");
//echo "correct answers ".$_SESSION['score'];
//echo "wrong answers".$_SESSION['wrong'];
//echo "attempted ".$_SESSION['attempted']; 
//echo "</br>";

/*$no_of_wrong_qns=$_SESSION['wrong'];
$no=0;
  while ($no < $no_of_wrong_qns){
  $result=mysqli_query( $con, "SELECT * FROM wrong WHERE WQID='$no' ") or die("Could not execute query: " .mysqli_error($con));
  $row=mysqli_fetch_assoc($result);
  $qno=$row['QID'];
  $result2=mysqli_query( $con, "SELECT * FROM questions WHERE QID='$qno' ") or die("Could not execute query: " .mysqli_error($con));
  $row2=mysqli_fetch_assoc($result2);
  echo $row2['QID'].'.'.$row2['QUESTION'];
  echo "</br>";
  //echo $row2['ANS'];
  if($row2['ANS']==0){
  	echo $row2['ANS1'];
  }elseif($row2['ANS']==1){
  	echo $row2['ANS2'];
  }elseif($row2['ANS']==2){
  	echo $row2['ANS3'];
  }elseif($row2['ANS']==3){
  	echo $row2['ANS4'];
  }
  echo "</br>";
  $no++;
}
 mysqli_query($con,"DELETE FROM wrong ");*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>

	<style type="text/css">
		table,td,th{
			border: 2px solid black;
			border-collapse: collapse;
			padding: 15px;
		}
		.result{
			margin-bottom: 50px;
		}
		
		
		.tr1{
			background-color: black;
			color: white;
			font-weight: bold;
		}
	</style>
</head>
<body>
<center>
		<h1>Thanks for your exam</h1>
		<table class="result">
			<tr><td><?php echo "Total Number of questions "; ?></td><td><?php echo $_SESSION['total']; ?></td></tr>
			<tr><td><?php echo "Number of attempted questions "; ?></td><td><?php echo $_SESSION['attempted']; ?></td></tr>
			<tr><td><?php echo "Number of correct answers "; ?></td><td><?php echo $_SESSION['score']; ?></td></tr>
			<tr><td><?php echo "Number of wrong answers "; ?></td><td><?php echo $_SESSION['wrong']; ?></td></tr>
		</table>	
		<table class="answers">
			<caption><h1>Correct answer for the Wrongly answered/Unanswered questions </h1></caption>
		<?php
    $no_of_wrong_qns=$_SESSION['wrong_or_unanswered'];
        $wno = 1;
      while ($wno <= $no_of_wrong_qns){
      $result=mysqli_query( $con, "SELECT * FROM wrong WHERE WQID='$wno' AND EMAIL='$b' ") or die("Could not execute query: " .mysqli_error($con));
      $row=mysqli_fetch_assoc($result);
      $qno=$row['QID'];
      $wtid=$_SESSION['typeid'];
      $result2=mysqli_query( $con, "SELECT * FROM questions WHERE QID='$qno' AND TYPEID='$wtid' ") or die("Could not execute query: " .mysqli_error($con));
      $row2=mysqli_fetch_assoc($result2);?>

        <tr class="tr1"><td><?php echo $row2['QID'].'.'.$row2['QUESTION']; ?></td></tr>
        <tr class="tr2">
          <td>
            <?php echo "Answer : ";?><?php
                if($row2['ANS']==0){
                echo $row2['ANS1'];
              }elseif($row2['ANS']==1){
                echo $row2['ANS2'];
              }elseif($row2['ANS']==2){
                echo $row2['ANS3'];
              }elseif($row2['ANS']==3){
                echo $row2['ANS4'];
              }

              $wno++;
      }
 		mysqli_query($con,"DELETE FROM wrong");
    mysqli_query($con,"DELETE FROM user_answers");
    ?>

  				</td>
  			</tr>
  		</table>
</center>
</body>
</html>