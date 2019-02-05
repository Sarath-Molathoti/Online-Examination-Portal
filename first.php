 <?php
session_start();
$_SESSION['duration'] = 1;
$_SESSION['start_time'] = date("Y-m-d H:i:s");
$end_time = date('Y-m-d H:i:s', strtotime('+'.$_SESSION['duration'].'minutes',strtotime($_SESSION['start_time'])));
$_SESSION['end_time'] = $end_time;
//echo 'ALL THE BEST';
header("Location:quiz.php");
//require 'quiz.php';
?>
