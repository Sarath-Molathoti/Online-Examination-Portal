<?php
require 'db_connect.php';
$p_name=$_POST["n_name"];
$p_rollno=$_POST["n_rollno"];
$p_email=$_POST["n_email"];
$p_password=$_POST["n_password"];
$p_gender=$_POST["n_gender"];
$p_dob=$_POST["n_dob"];
$p_college=$_POST["n_college"];
$p_branch=$_POST["n_branch"];
$p_year=$_POST["n_year"];
$p_mobile=$_POST["n_mobile"];
$count=0;
$useremail=mysqli_query($con,"SELECT EMAIL FROM personal_info WHERE EMAIL='$p_email'") or die("can't");
$count=mysqli_num_rows($useremail);
if($count!=0){
	echo " User with same Email Already Exists!";
	header('Location:signup.php');
}
$result1=mysqli_query($con,"INSERT INTO personal_info(NAME,EMAIL,PASSWORD,DOB,GENDER,MOBILE) VALUES('$p_name','$p_email','$p_password',
         '$p_dob','$p_gender','$p_mobile')");
$result2=mysqli_query($con,"INSERT INTO educational_info(EMAIL,COLLEGE,BRANCH,YEAR) VALUES ('$p_email','$p_college','$p_branch','$p_year')");
if(false==$result1 || false==$result2){
	printf("error :%s\n",mysqli_error($con));
}
else{
  echo "Registered Successfully";
  header('Location:login.php');
}

?>
