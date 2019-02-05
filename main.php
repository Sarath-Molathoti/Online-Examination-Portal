<?php
session_start();
?>
<div id="response"></div>
<script type="text/javascript">
	var x = setInterval(fun1,1000);
	function fun1(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","response.php",false);
		xmlhttp.send(null);
		document.getElementById("response").innerHTML=xmlhttp.responseText;
	}
	function xx(){
			clearInterval(x);
			//clearInterval(y);
		}
		setTimeout('xx()',60000);
</script>