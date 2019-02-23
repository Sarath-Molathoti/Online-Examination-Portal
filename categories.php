<!DOCTYPE html>
<html>
<head>
	<title>Select Category</title>
	<style type="text/css">
	    body{
	margin: 0px;
	padding: 0px;
	background-color: rgba(0,0,0,0.1);
	color: white;
}
	    input[type="submit"]{
	    	width: 244px;
	    	height: 35px;
	    	margin-left: 50px;
	    	border: none;
	    	outline: none;
	    	background-color: black;
	    	color: white;
	    	font-weight: bold;
	    	font-family: sans-serif;
	    	margin-top: -20px;
	    	border: 2px solid black;
	    	font-size: 16px;
	    }
	    input[type="submit"]:hover{
	    	background-color: cyan;
	    	color: black;
	    	font-weight: bold;
	    }
	    
	    .main{
	    	margin-top: 30px;
	    	margin-left: 190px;
	    }
	    img{
	    	margin-left: 50px;
	    	border: 2px solid black;	
	    
	    }
	   
	    h1{
	    	color: red;
	    	font-size: 42px;
	    	margin-left: 220px;
	    }
	</style>
</head>
<body>

	<div class="main">
		<h1>Please Select Your Interest</h1>
		<form action="instructions.php" method="POST">
		<table>
		<tr>
			<td><img src="html.png" height="180" width="240" ></td>
			<td><img src="css.png" height="180" width="240"></td>
			<td><img src="js.jpg" height="180" width="240" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="n_html" value="HTML" class="h"></td>	
		    <td><input type="submit" name="n_css" value="CSS" class="c"></td>
		    <td><input type="submit" name="n_javascript" value="JavaScript(JS)" class="j"></td>
		</tr>
		<tr><td colspan="3"><p></p></td></tr>
        <tr><td colspan="3"></td><p></p></tr></br>
		<tr>
			<td><img src="php.png" height="180" width="240" ></td>
			<td><img src="java.png" height="180" width="240"></td>
			<td><img src="python.jpg" height="180" width="240" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="n_php" value="PHP" class="p"></td>	
		    <td><input type="submit" name="n_java" value="JAVA" class="c"></td>
		    <td><input type="submit" name="n_python" value="PYTHON" class="j"></td>
		</tr>
	</table>
	</form>
</div>
</body>
</html>