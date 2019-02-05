<?php
 // include 'login_header.php';
  require 'db_connect.php';
  session_start();
  $_SESSION['counter']++;
 // echo $_SESSION['counter'];
 // $no=$_SESSION['counter'];
  //$result=mysqli_query( $con, "SELECT * FROM questions WHERE TYPEID='1' AND QID='$no' ") or die("Could not execute query: " .mysqli_error($con));
  //$row=mysqli_fetch_assoc($result);
 header("Location:quiz.php");
?>