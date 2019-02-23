<?php
require 'db_connect.php';
session_start();
 $typeid=$_SESSION['typeid'];

 $result=mysqli_query($con,"SELECT * FROM questions WHERE TYPEID='$typeid' ") or die("Could not execute query: " .mysqli_error($con));
 $number_of_qns=mysqli_num_rows($result);

 $result1=mysqli_query($con,"SELECT * FROM user_answers WHERE TYPEID='$typeid' ") or die("Could not execute query: " .mysqli_error($con));
 //$number_of_qns_answered=mysqli_num_rows($result1);
 $_SESSION['attempted'] = mysqli_num_rows($result1);

 $qid=1;
 while ($number_of_qns>=$qid) {

 	$result2=mysqli_query($con,"SELECT * FROM questions WHERE TYPEID='$typeid' AND QID='$qid' ");
 	$result3=mysqli_fetch_assoc($result2);
 	$ans=$result3['ANS'];

 	$result4=mysqli_query($con,"SELECT * FROM user_answers WHERE TYPEID='$typeid' AND QID='$qid' ");
 	$result5=mysqli_fetch_assoc($result4);
 	$count1=mysqli_num_rows($result4);
 	if($count1!=0){
 	   $user_ans=$result5['USER_ANS'];
 	   if ($ans==$user_ans) {
 		  $_SESSION['score']++;
 	   }
 	   else{
 	   	   $_SESSION['wrong']++;
 	   	   $_SESSION['wrong_or_unanswered']++;
 	   	  $a = ++$_SESSION['wqid'];
  		  $wrong_qns1=mysqli_query($con,"INSERT INTO wrong(TYPEID,WQID,QID) VALUES ('$typeid','$a','$qid') ");	
 		 
 	   }
    }else{
    	$_SESSION['wrong_or_unanswered']++;
    	$b = ++$_SESSION['wqid'];
  		$wrong_qns2=mysqli_query($con,"INSERT INTO wrong(TYPEID,WQID,QID) VALUES ('$typeid','$b','$qid') ");	
    }
    $qid++;

 }

 header("location:result.php");
?>