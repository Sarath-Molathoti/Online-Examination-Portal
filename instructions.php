<?php
 include 'login_header.php';
 session_start();
 $username = $_SESSION['username'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Instructions</title>
 	<style type="text/css">
 		.instr{
 			background-color: Lavender;
 			margin-left: 200px;
 			width: 70%;
 			font-size:20px;
 			color: black;
 			padding: 20px;
 			margin-top: 10px;
 		}
 		
 		.start{
 			border: 2px solid pink;
 			background-color: black;
 			color: white;
 			padding: 10px;
 			border-radius: 8px;
 			margin: 40px;
 			margin-left: 400px;
 		    margin-top: 50px;
 			text-decoration: none;

 		}
 	</style>
 </head>
 <body>
 	<div class="instr">

 		<h3>Hii...<div style="color: green"><?php echo $username ?></div></h3>
 		<h1>Instructions for the Your Exam</h1>
 		
 		<p>
 			1. In the rare and unlikely event of a technical failure during the test, the candidate may be required
			to attempt the test again.</br>

			2. The candidates must ensure that the computer allotted to them is switched on and any problem
			with the computer should be informed to the invigilator immediately.</br>

			3. Details like your Name, Roll No, Form no etc are to be filled on the space provided on the space
			provided on the screen for test appearance.</br>

			4. There is no time limit for individual parts of the test. The candidate can go back and change any
			of his/her answers among the 10 questions.</br>

			5. All questions will be of the Multiple Choice Question (MCQ type). Each MCQ will consist of a
			stem which may be in the form of a question or an incomplete statement and four options.</br>
			6. Candidates must choose the correct or most appropriate answer by clicking on the button next to
			the answer. Candidates can navigate freely through the questions.</br>
			7. At the conclusion of the test you should follow the instruction of the invigilator in order to properly
			record/save your test work.</br>
			8. Blank sheets for rough work will be provided, if required.</br>

 		</p>
 		<a href="quiz.php" class="start"><b>Start Quiz</b></a>
 	</div>
 	
 
 </body>
 </html>